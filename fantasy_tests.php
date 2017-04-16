<?php

	require "vendor/autoload.php";

	use MattThommes\Rest\Yahoo;
	use MattThommes\Debug;
	$debug = new Debug;

	function dbg($x, $continue = 0) {
		return $GLOBALS["debug"]->dbg($x, $continue);
	}

	$consumerKey = "";
	$consumerSecret = "";
	$callbackUrl = "http://homestead.app/yahoo_api/fantasy_tests.php";

	$yahoo = new Yahoo($consumerKey, $consumerSecret, $callbackUrl);

?>