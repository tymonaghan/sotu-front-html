<?php
$myFile = fopen("sentiments.txt", "w"); #opens (and creates if necessary) sentiments.txt as $myFile
$myScript = fopen("myscript.R", "r"); # opens myscript.R as $myScript
fwrite($myFile, fread($myScript,filesize("myscript.R"))); #writes ($to myFile, readscontent of $myScript for as many bytes as myscript.R is long)
fclose($myScript); #close $myScript
fclose($myFile); #close $myFile
# Rscript myscript.R > sentiments.txt

#ok well this version creates sentiments.txt and writes the myscript.R into it. just need to get it to write the output, not the script itself, and we're good to go
?>
