<?php
$answer = $_GET['answer'];
$file = fopen("responses.txt", "a");
fwrite($file, date("Y-m-d H:i:s") . " - " . $answer . "\n");
fclose($file);
?>
