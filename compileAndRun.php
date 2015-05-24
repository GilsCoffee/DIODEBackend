<?php
$fileToRun = $_POST["fileToRun"];
$last2= substr($fileToRun, -2);
if(strcmp($last2,".c")==0){
$fileWithoutType = rtrim($fileToRun, ".c");
$output;
exec("gcc ".$fileToRun." -o ".$fileWithoutType,$output);
exec("./".$fileWithoutType,$output);
file_put_contents("output.txt",$output);
unlink($fileToRun);
unlink($fileWithoutType.".c");
}
else 
{$fileWithoutType = rtrim($fileToRun, ".java");
$output;exec("javac *.java",$output);
exec("java  ".$fileWithoutType,$output);
file_put_contents("output.txt",$output);
unlink($fileToRun);
unlink($fileWithoutType.".class");
}

?>



