<?php
$fileWithoutType = rtrim($fileToRun, ".java");
$output;exec("javac *.java",$output);
exec("java  ".$fileWithoutType,$output);
file_put_contents("output.txt",$output);
unlink($fileToRun);
unlink($fileWithoutType.".class");
?>




