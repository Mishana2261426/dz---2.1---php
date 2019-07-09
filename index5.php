<?php

$array = [];

for ($i=0; $i < 10; $i++) { 
	$array[] = mt_rand(0,10);
}

print_r($array);

if (in_array(5, $array)) {
    echo "Да\n";
} else {
	echo "Нет\n";
}