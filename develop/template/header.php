<?php
$mysqli = new mysqli ( "localhost", "visitor", "Companizer_visitor1122", "companizer" );
if (! $mysqli) {
	echo "Please try later.";
}
require_once ($path. 'content/config/config.php');
ob_start ();
?>