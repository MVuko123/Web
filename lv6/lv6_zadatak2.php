<?php
$str_tekst = fopen("C:\\xampp\\htdocs\\tekst.txt", "r+");
echo "<h1>".fread($str_tekst, filesize("tekst.txt"))."</h1>";
fclose($str_tekst);

$str_tekst = file_get_contents("C:\\xampp\\htdocs\\tekst.txt");
$izrezani_tekst = explode(" ", $str_tekst);

$file = fopen("C:\\xampp\\htdocs\\tekst.txt", "a");
fwrite($file, "\n");
foreach($izrezani_tekst as $value){
    fwrite($file, $value.PHP_EOL);
}

$k = strpos($str_tekst, "k");
$brojK = substr_count($str_tekst, "k");

fwrite($file, "Na ".$k."indeksu se prvi puta pojavlajuje k, a u cijelom tekstu se pojavljuje".$brojK." puta");
fclose($file)

?>