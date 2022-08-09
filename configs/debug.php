<?php
function ver($v, $sep = 0) {
	if (is_array($v)) {
		foreach ($v as $key => $value) {
			echo "\n", str_repeat("|  ", $sep), '[', $key, '] => ', ver($value, $sep + 1);
		}
	} else {
		var_export($v);
	}
	if ($sep == 0) {echo "\n";}
}

function vq($d) {
	ver($d);
	exit;
}