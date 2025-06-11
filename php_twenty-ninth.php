<?php
$fh = fopen("testfile.txt", 'r') or die("File does not exist or you lack permission to open it");
$text = fread($fh, 3); // اقرأ أول 3 حروف بس
fclose($fh);
echo $text;
?>
