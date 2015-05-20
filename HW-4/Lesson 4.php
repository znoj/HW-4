<?php
require ('function.php');
echo summaSlov($string);
echo "<br />";
$string = strip_tags($string);
$na4alo = 'Преподаватели Source IT';
$okon4anie = 'Учить английский для IT';
$nomerNa4alo = mb_strpos($string, $na4alo);
$nomerKonec = mb_strpos($string, $okon4anie);
$string = mb_strcut($string, $nomerNa4alo, ($nomerKonec - $nomerNa4alo));
$array = array('.', ',', ';', ':', '(', ')', '-', '”', '“', '—', '/', '»', '«', '+');
$string = str_replace($array, "", $string);
$string = str_replace('   ', ' ', $string);
$string = str_replace('  ', ' ', $string);
$words = str_word_count($string, 1);
$result = array_count_values($words);
arsort($result);
print_r($result);