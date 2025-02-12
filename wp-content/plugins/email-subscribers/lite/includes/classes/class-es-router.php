<?php

if ( ! class_exists( 'ES_Router' ) ) {

	/**
	 * Class to handle single campaign options
	 * 
	 * @class ES_Router
	 */
	class ES_Router {

		// class instance
		public static $instance;

		// class constructor
		public function __construct() {
			$this->init();
		}

		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function init() {
			$this->register_hooks();
		}

		public function register_hooks() {
			add_action( 'wp_ajax_icegram-express', array( $this, 'handle_ajax_request' ) );
			/* Dev code */
			add_action( 'wp_ajax_nopriv_icegram-express', array( $this, 'handle_ajax_request' ) );
		}

		/**
		 * Method to draft a campaign
		 *
		 * @return $response Broadcast response.
		 *
		 * @since 4.4.7
		 */
		public function handle_ajax_request() {

			$response = array();

			if (  ! defined( 'IG_ES_DEV_MODE' ) || ! IG_ES_DEV_MODE ) {
				check_ajax_referer( 'ig-es-admin-ajax-nonce', 'security' );
			}

			$request = $_REQUEST;
			
			$handler       = ig_es_get_data( $request, 'handler' );
			$handler_class = 'ES_' . ucfirst( $handler ) . '_Controller';
			if ( empty( $handler ) || ! class_exists( $handler_class ) ) {
				$response = array(
					'message' => __( 'No request handler found.', 'email-subscribers' ),
				);
				wp_send_json_error( $response );
			}

			$method = ig_es_get_data( $request, 'method' );
			if ( ! method_exists( $handler_class, $method ) || ! is_callable( array( $handler_class, $method ) ) ) {
				$response = array(
					'message' => __( 'No request method found.', 'email-subscribers' ),
				);
				wp_send_json_error( $response );
			}

			$data   = ig_es_get_request_data( 'data', array(), false );
			$result = call_user_func( array( $handler_class, $method ), $data );

			if ( $result ) {
				$response['success'] = true;
				$response['data']    = $result;
			} else {
				$response['success'] = false;
			}

			wp_send_json( $response );
		}
	}
}

ES_Router::get_instance();

