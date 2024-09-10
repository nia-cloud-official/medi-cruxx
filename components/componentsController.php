<?php 

namespace Components;

class Prescription { 
    
    public $doctorName;
    public $doctorSignature;
    private $prescription_code;
    public $patientName;
    public $patientAge;
    public $patientSex;
    public $dateIssued;
    public $hospitalName;

    public function __construct(){ 
        $words = array();
        $words = ['pizza','anime','manga','valhalla','isekai'];
        $word = array_rand($words);
        $salt = "Lol this is stupid!";
        $code =  crypt($word,$salt);
        $this->prescription_code = $code;
    }

    public function process($patientName){ 
        $thid
    }
}

$getCode = new Prescription();