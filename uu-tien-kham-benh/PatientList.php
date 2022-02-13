<?php
include_once "Patient.php";

class PatientList
{
    const priorCode = 1;
    public $container;

    public function __construct()
    {
        $this->container = [];
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Tong so benh nhan " .count($this->container);
    }

    public function enqueue($patient)
    {
        $priorArr = [];
        $patientCode = $patient->getCode();
        if ($patientCode == self::priorCode) {
           array_push($priorArr, $patient);
        } else {
            array_push($this->container, $patient);
        }
        $this->container = array_merge($priorArr, $this->container);
        return $this->container;
    }

    public function dequeue()
    {
        return array_shift($this->container);
    }
}