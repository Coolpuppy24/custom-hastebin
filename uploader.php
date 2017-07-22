<?php

$data = $_POST['input'];

$length = 10;
$random = substr(str_shuffle("abcdefghigklmnopqrstuvABCDEFGHIJKLMNOP"), 0, $length);

$my_file = "paste/$random.txt";

$handle = fopen($my_file) or die('Could not open file: '.$my_file);

fwrite($handle, $data);

header('location: /'.$my_file.'' );

?>