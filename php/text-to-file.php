<?php
$myFile = fopen("../sentimentsss.txt","a+"); #open/create "sentimentsss.txt" as $myFile, in create/append mode!
$output = "testTEXT"; # store the string "testTEXT" as $output
fwrite($myFile,$output); # write TO $myFile, the thing to write is $output
fclose($myFile); #close the file to free resources and stop writing to it
?>
