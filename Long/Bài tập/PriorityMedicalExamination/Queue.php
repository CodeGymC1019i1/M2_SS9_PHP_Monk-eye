<?php
include_once "Patient.php";

class QueuePatient
{
    public $frontPatient = NULL;
    public $backPatient = NULL;

    public function isEmpty()
    {
        if ($this->frontPatient == NULL)
            return true;
        return false;
    }
    public function sizeOfQueue(){
        $current = $this->frontPatient;
        $count=0;
        while ($current!==NULL){
            $current=$current->next;
            $count++;
        }
        return $count;
    }

    public function enQueuePatient($name, $code)
        {
            $newPatient = new Patient($name, $code);
            if ($this->isEmpty()) {
                $this->backPatient = $newPatient;
                $this->frontPatient = $this->backPatient;
            }
            else {
                $current = $this->frontPatient;
                $before = null;
                $currentCode = $current->code;
                $newPatientCode = $newPatient->code;
                while ($currentCode <= $newPatientCode && $current != null) {
                    $before = $current;
                    $current = $current->next;
                }
                if ($current == null)
                    $this->backPatient = $newPatient;
                $before->next = $newPatient;
                $newPatient->next = $current;
                if ($current == $this->frontPatient) {
                    $this->frontPatient = $newPatient;
                }
            }}

    public function deQuerePatient()
    {
        if ($this->isEmpty() == true) {
            return null;
        }
        $removedPatient = $this->frontPatient->code;
        $this->frontPatient = $this->frontPatient->next;
        return $removedPatient;
    }

    public function sortPatient()
    {

    }

    public function toString()
    {
        $current = $this->frontPatient;
        $listPatient = '';

        while ($current !== NULL) {
            $listPatient .= "Name:" . $current->name . "  Code:" . $current->code . "<br>";
            $current = $current->next;
        }

        return $listPatient;
    }
}