<?php

define( 'NL', "\n" );

include 'channels.php';

header('Content-type: application/xspf+xml');
header('Content-Disposition: attachment; filename="tv.xspf"');

echo '<?xml version="1.0" encoding="UTF-8"?>' . NL
   . '<playlist version="1" xmlns="http://xspf.org/ns/0/">' . NL 
   . '<trackList>' . NL;

	foreach( $channels as $pname => $parray) {
			echo '<track><location>http://192.168.2.200/index.php?pg=' . $pname  . '&amp;pl=true</location><title>' . $pname . '</title></track>'.NL;
    }

	echo '</trackList></playlist>';
    exit();

?>
