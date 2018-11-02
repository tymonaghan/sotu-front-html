<?php
$output = "testTEXT"; # store the string "testTEXT" as $output
file_put_contents("../sentiments.md","Text is getting appended then a line break \n", FILE_APPEND);
#replace fopen, fwrite, and fclose with file_put_contents
# the parameters are (file to open/write, data to write, flags [FILE_APPEND] writes in append instead of overwrite mode
?>
