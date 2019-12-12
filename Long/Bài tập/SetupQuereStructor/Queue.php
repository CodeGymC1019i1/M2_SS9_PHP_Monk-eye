<?php
include_once "Node.php";

class Queue
{
public $firstNode =NULL;
public $secondNode =NULL;
public function isEmpty(){
    if ($this->firstNode==NULL) return true;
    return false;
}
public function enQueue($value){
    $back = $this->secondNode;
    $this->secondNode = new Node($value);
    if ($this->isEmpty()==true){
        $this->firstNode = $this->secondNode;
    }
    else {
        $back->next = $this->secondNode;
    }
}
    public function dequeue()
    {
        if ($this->isEmpty()==true) {
            return null;
        }
        $removedValue = $this->firstNode->value;
        $this->firstNode = $this->firstNode->next;
        return $removedValue;
    }
}