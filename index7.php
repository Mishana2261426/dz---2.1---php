<?php

$num = 1236;

function addition($h) {
	$vr = array_sum(str_split($h));
	if ($vr > 9) {
		return addition($vr);
	}

	return $vr;
}

echo addition($num) . " - меньше или равно 9\n";

