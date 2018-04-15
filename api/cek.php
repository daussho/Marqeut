<?php
require_once( 'lib/woocommerce-api.php' );

$options = array(
	'ssl_verify'      => false,
);
$consumer_key = "ck_3393779284b2c604e30177bf87b21caa8dfcf49b";
$consumer_secret = "cs_a3737ec702c729776f0036bb9234515b43e3b382";

try {

	$client = new WC_API_Client( 'http://localhost/wp', $consumer_key, $consumer_secret, $options );

} catch ( WC_API_Client_Exception $e ) {

	echo $e->getMessage() . PHP_EOL;
	echo $e->getCode() . PHP_EOL;

	if ( $e instanceof WC_API_Client_HTTP_Exception ) {

		print_r( $e->get_request() );
		print_r( $e->get_response() );
	}
}
?>