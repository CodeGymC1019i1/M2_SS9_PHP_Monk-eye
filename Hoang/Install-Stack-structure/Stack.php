<?php


class Stack
{
    
    public $stack;
    public $limit;
    
    public function __construct($limit)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
    
    public function size()
    {
        return count($this->stack);
    }
    
    public function isEmpty()
    {
        if ($this->size() == 0)
            return true;
        return false;
    }
    
    public function push($item)
    {
        if ($this->size() < $this->limit)
            array_unshift($this->stack, $item);
        else
            echo "Stack is full";
    }
    
    public function pop()
    {
        if ($this->isEmpty())
            echo "Stack is empty";
        else
            return array_unshift($this->stack);
    }
    
    public function top()
    {
        return current($this->stack);
    }
}