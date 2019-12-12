<?php
include_once "Stack.php";

$stack = new Stack(10);
$stack->push(12);
$stack->push(15);
$stack->push(17);
echo $stack->stack[0];
 $stack->top();
 var_dump($stack->isEmpty());
