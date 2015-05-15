<?php
$holodilnik = array('meat' => array('chiken' => array('nozhki', 'bedra', 'okoro4ka'), 'beef', 'pork'), 'vegetables' => array('tomato' => array('pink', 'red', 'cherry'), 'cucumber', 'onion'), 'fruits' => array('banana', 'grape' => array('red', 'green'), 'pear'));
foreach ($holodilnik as $nomerPolki => $product) {
		if (is_array($product)) { 
			foreach ($product as $raznovidnost => $vid) {
				if (is_array($vid)) {
					foreach ($vid as $key => $value)
						echo "$nomerPolki:\($raznovidnost)\($value) <br />";
			} else {
				echo "$nomerPolki:\($raznovidnost)\($vid) <br />";
			}	
		}				
	} else {
		echo "$nomerPolki: $product <br />";
	}
}

