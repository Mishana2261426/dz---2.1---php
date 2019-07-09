<?php 

$array = [];

for ($i=0; $i < 10; $i++) { 
	$array[] = mt_rand(0,10);
}

print_r($array);

function match($arr) {
	for ($i=1; $i < count($arr); $i++) { 
		if ($arr[$i] === $arr[$i-1]) {
			echo "Да\n";
		} else {
			echo "Нет\n";
		}

	}
}

echo match($array);


// match = function(arr) {
// for (i=1; i<arr.length; i++) {
// if (arr[i]===arr[i-1]) return console.log('da');
// }
// return console.log('net');
// }
// var arr = [1, 1, 2, 3, 4, 5];
// match(arr);