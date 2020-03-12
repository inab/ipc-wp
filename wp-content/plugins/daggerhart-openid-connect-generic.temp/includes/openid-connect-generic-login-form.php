<?php

class OpenID_Connect_Generic_Login_Form {

	private $settings;
	private $client_wrapper;

	/**
	 * @param $settings
	 * @param $client_wrapper
	 */
	function __construct( $settings, $client_wrapper ){
		$this->settings = $settings;
		$this->client_wrapper = $client_wrapper;
	}

	/**
	 * @param $settings
	 * @param $client_wrapper
	 *
	 * @return \OpenID_Connect_Generic_Login_Form
	 */
	static public function register( $settings, $client_wrapper ){
		$login_form = new self( $settings, $client_wrapper );

		// alter the login form as dictated by settings
		add_filter( 'login_message', array( $login_form, 'handle_login_page' ), 99 );

		// add a shortcode for the login button
		add_shortcode( 'openid_connect_generic_login_button', array( $login_form, 'make_login_button' ) );

		$login_form->handle_redirect_login_type_auto();

		return $login_form;
	}

	/**
	 * Auto Login redirect
	 */
	function handle_redirect_login_type_auto()
	{
		if ( $GLOBALS['pagenow'] == 'wp-login.php'
			&& ( $this->settings->login_type == 'auto' || ! empty( $_GET['force_redirect'] ) )
			&& ( ! isset( $_GET[ 'action' ] ) || $_GET[ 'action' ] !== 'logout' )
			&& ! isset( $_POST['wp-submit'] ) )
		{
			if (  ! isset( $_GET['login-error'] ) ) {
			    $this->handle_redirect_cookie();
				wp_redirect( $this->client_wrapper->get_authentication_url() );
				exit;
			}
			else {
				add_action( 'login_footer', array( $this, 'remove_login_form' ), 99 );
			}
		}
	}

	/**
	 * Handle login related redirects
	 */
	function handle_redirect_cookie()
	{
		if ( $GLOBALS['pagenow'] == 'wp-login.php' && isset( $_GET[ 'action' ] ) && $_GET[ 'action' ] === 'logout' ) {
			return;
		}

		// record the URL of this page if set to redirect back to origin page
		if ( $this->settings->redirect_user_back )
		{
			$redirect_expiry = current_time('timestamp') + DAY_IN_SECONDS;

			// default redirect to the homepage
			$redirect_url = home_url( esc_url( add_query_arg( null, null ) ) );

			if ( $GLOBALS['pagenow'] == 'wp-login.php' ) {
				// if using the login form, default redirect to the admin dashboard
				$redirect_url = admin_url();

				if ( isset( $_REQUEST['redirect_to'] ) ) {
					$redirect_url = esc_url( $_REQUEST[ 'redirect_to' ] );
				}
			}

			$redirect_url = home_url( esc_url( ) );

			$redirect_url = apply_filters( 'openid-connect-generic-cookie-redirect-url', $redirect_url );

			setcookie( $this->client_wrapper->cookie_redirect_key, $redirect_url, $redirect_expiry, COOKIEPATH, COOKIE_DOMAIN, is_ssl() );
		}
	}

	/**
	 * Implements filter login_message
	 *
	 * @param $message
	 * @return string
	 */
	function handle_login_page( $message ) {

		if ( isset( $_GET['login-error'] ) ) {
			$message .= $this->make_error_output( $_GET['login-error'], $_GET['message'] );
		}

		// login button is appended to existing messages in case of error
		$message .= $this->make_login_button();
		return $message;
	}

	/**
	 * Display an error message to the user
	 *
	 * @param $error_code
	 *
	 * @return string
	 */
	function make_error_output( $error_code, $error_message ) {

		ob_start();
		?>
		<div id="login_error">
			<strong><?php _e( 'ERROR'); ?>: </strong>
			<?php print esc_html($error_message); ?>
		</div>
		<?php
		return ob_get_clean();
	}

	/**
	 * Create a login button (link)
	 *
	 * @return string
	 */
	function make_login_button() {
		$text = apply_filters( 'openid-connect-generic-login-button-text', __( 'Login' ) );
		$href = $this->client_wrapper->get_authentication_url();

		// maybe set redirect cookie on formular page
		$this->handle_redirect_cookie();

		ob_start();
		?>

		<!-- Login button in the right-upper corner.
		<div style="display: inline-block; margin: 1em 0;">
			<a  class="oidc-button"
			    href="<?php print esc_url( $href ); ?>"><?php print $text; ?></a>
		</div>
		-->

		<!-- Login button positioned along the rest toolbar elements-->
		<a class="nav-link" href="<?php print esc_url( $href ); ?>"><?php print $text; ?></a>
		

		<?php
		return ob_get_clean();
	}

	/*
	 * Removes the login form from the HTML DOM
	 */
	function remove_login_form() {
		?>
		<script type="text/javascript">
			(function() {
				var loginForm = document.getElementById("user_login").form;
				var parent = loginForm.parentNode;
				parent.removeChild(loginForm);
			})();
		</script>
		<?php
	}
}
