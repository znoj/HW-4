<?php
function summaSlov($string) {
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
if (mb_strlen($string) > 0) {
	$newString = explode(' ', trim($string));
 	$summa = count($newString);
 }
return $summa;
}
$string = file_get_contents('http://source-it.com.ua/teachers/');