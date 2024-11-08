<?php

$myfile = fopen("location.txt", "w");
$txt = "lat:" . $_GET["lat"] ."\nlong:" . $_GET["long"] ."IP:" . $_SERVER["REMOTE_ADDR"] . "user agent:" . $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);

?>
