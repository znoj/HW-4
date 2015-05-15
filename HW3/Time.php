<?php
$hour = date("H");
if (($hour >= 5) && ($hour <= 10)) {
	echo "Good Morning";
}
elseif (($hour >= 11) && ($hour <= 16)) {
	echo "Good afternoon";
}
elseif (($hour >= 17) && ($hour <= 21)) {
	echo "Good evening";
}
elseif (($hour >= 22) || ($hour < 5)) {
	echo "пцуукс"; 
} 
