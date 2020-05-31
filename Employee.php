<?php

/* 
 Romauli Feronica Siregar
 */
class Employee{
    public $name;
    public $title;
    public $salary;
    
    function setEmployeeName($name) {
        $this->name = $name;
    }

    function getEmployeeTitle() {
        return $this->title="Manajer";
    }

    function getEmployeeMontlySalary() {
        return $this->salary= "10.000.000";
    }
    function getProfileEmployee()
    {
        echo "Nama:".$this->name.
                "<br>Jabatan:".$this->title.
                "<br>Gaji Perbulan:".$this->salary;
                
    }

    

}
