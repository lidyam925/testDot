<?php

class Employee {
	private $name;
	private $title;
	private $salary;

	public function setEmployeeName($name){
		$this->name=$name;

	}

	public function getEmployeeTitle(){
		return $this->title;
	}

	public function getEmployeeProfile(){
		
	}

	public function getEmployeeMonthlySalary($day){
		return $this->salary;
	}

}
?>