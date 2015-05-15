<?php
function isChetnoe($chislo, $mesyac) {
	$S = $chislo + $mesyac;
	if ($S % 2 == 0) {
		return true;
	} else {
		return false;
	}

}

function isGlasnaya ($bukva) {
	$letterGlass = array('A', 'E', 'I', 'O', 'U');
	if (in_array($bukva, $letterGlass)) {
		return true;
	} else {
		return false;
	}
}

function getDolzhnost($name, $day, $month) {

	$chet = isChetnoe($day, $month);
	if (isGlasnaya($name[0]) &&  $chet) { 
		return "Junior PHP";
	} elseif (isGlasnaya($name[0]) &&  !$chet) {
		return "Intern PHP";
	} elseif (!isGlasnaya($name[0]) &&  $chet) {
		return "Intern PHP developer";
	} else {
		return "Junior PHP developer";
	}
}


