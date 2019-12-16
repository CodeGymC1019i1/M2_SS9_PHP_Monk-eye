<?php
include_once "StackList.php";
$stackList = new StackList(20);
$decimalNumber = 50;
echo 'Decimal: ' . $decimalNumber;
while ($decimalNumber > 0) {
    $surplus = $decimalNumber % 2;
    $stackList->push($surplus);
    $decimalNumber = ($decimalNumber - $surplus) / 2;
}
echo ' to Binari: ' . $stackList->toString();