<?php

	require "vendor/autoload.php";

	use MattThommes\Rest\Yahoo;
	use MattThommes\Debug;

	if (!session_id()) {
		session_start();
	}

	$debug = new Debug;

	function dbg($x, $continue = 0) {
		return $GLOBALS["debug"]->dbg($x, $continue);
	}

	$consumerKey = "--";
	$consumerSecret = "";
	$callbackUrl = "https://9f9ad9ca.ngrok.io/yahoo_api/fantasy_tests.php";
	$accessToken = "";

	$yahoo = new Yahoo($consumerKey, $consumerSecret, $callbackUrl, $accessToken);

	if (! $yahoo->getAccessToken()) {

		?>
		<p><a href="<?php echo $yahoo->getAuthorizeUrl(); ?>">Authorize</a></p>
		<?php

	} else {

		?>
		<p>Access token (save in script!):
			<br><br>
			<textarea><?php echo $yahoo->getAccessToken(); ?></textarea>
		</p>
		<?php

	}

?>
