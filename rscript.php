<?php
$myFile = fopen("sentiments.txt", "w");
$myScript = fopen("myscript.R", "r");
fread($myScript,filesize("myscript.R"));
fclose($myScript);
fclose($myFile)
# Rscript myscript.R > sentiments.txt
?>
