<?php


class Stack
{
public $stack;
public $limit;
public function __construct($limit)
{
    $this->stack = [];
    $this->limit = $limit;
}
public function push($item){
    if (count($this->stack)<$this->limit)
    array_unshift($this->stack,$item);
    else echo "Stack fulled";
}
public function pop(){
    $item= array_shift($this->stack);
    return $item;
}
public function top(){
    $item = $this->stack[0];
    echo "Last item of Stack is:".$item;
}
public function isEmpty(){
    if (count($this->stack)==0)
        return true;
    return false;
}
}