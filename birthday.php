<?php

class birthday
{
    public $fname;
    public $lname;
    public $dob;
    public $gender;

    public function __construct($fname,$lname,$dob,$gender){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->dob   = $dob;
        $this->gender = $gender;
    }

    public function greet()
    {
        return "HI {$this->fname} {$this->lname} " ." your birthday is on " . $this->dob . "<br />";
    }

}