<?php

$date1 = date_create("30-02-2012");
$date2 = date_create("28-10-2012");

$result = date_diff($date1, $date2);

echo "Между датами -" . $result->days . "Дней\n";