<?php
$filename = $_GET["filename"];
$code = readfile($filename);
echo($code);

?>

