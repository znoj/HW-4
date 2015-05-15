<?php
function STreugolnika($a, $b, $c) {
	$p = ($a + $b +$c) / 2;
	return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}

$a = 8;
$b = 6;
$c = 6;

if (($a > 0) && ($b > 0) && ($c >0) && ($a < ($b + $c)) && ($b < ($a + $c)) && ($c < ($a + $b))) {
	echo STreugolnika(8, 6, 6);
}

echo "<br />";
function SPryamougolnika($a, $b) {
	$S = $a * $b;
	return $S;
}

$a = 8;
$b = 6;


if (($a > 0) && ($b > 0)) {
	echo SPryamougolnika(8, 6);
}

echo "<br />";
function SKruga($pi, $r) {
	$S = $pi * ($r * $r);
	return $S;
}

$pi = 3.14;
$r = 6;


if ($r > 0) {
	echo SKruga(pi(), 6);
}

