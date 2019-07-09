<?php 


$year = 9552;

if ($year%4 != 0) {
	echo $year . " - это не високосный год \n";
} else if ($year%100 != 0) {
	echo $year . " - это високосный год \n";
} else if ($year%400 != 0) {
	echo $year . " - это не високосный год \n";
} else {
	echo $year . " - это високосный год \n";
}
