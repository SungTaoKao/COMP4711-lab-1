<?php

class Student {
	/*
		student constructor
		$surname - string; student last name
		$firstname - string; student first name
		$emails - array; list of student's emails
		$grades - array; list of student's grades
		$picture - string; default picture url
	*/
	function __construct() {
		$this->surname = '';
		$this->first_name = '';
		$this->emails = array();
		$this->grades = array();
		$this->picture = "http://pasp.org.pk/assets/img/pic.png";
	}
	
	/*
		add email function
		$which - string; specifies index of array to put the email
		$address - string; email to be added
	*/
	function add_email($which, $address) {
		$this->emails[$which] = $address;
	}
	
	/*
		add grade function
		$grade - int; grade to be added to next available index
	*/
	function add_grade($grade) {
		$this->grades[] = $grade;
		
	}
	
	/*
		average calculating function
	*/
	function average() {
		$total = 0;
		foreach ($this->grades as $value)
			$total += $value;
		return $total / count($this->grades);
	}
	
	/*
		change picture function
	*/
	function change_picture($newURL){
			$this->picture = $newURL;
	}
	
	/*
		output String function into rendered html
	*/
	function toString() {
		$result = $this->first_name . ' ' . $this->surname;
		$result .= ' ('.$this->average().")\n";
		foreach($this->emails as $which=>$what)
			$result .= $which . ': '. $what. "\n";
		$result .= "\n";
		return '<pre><div style="border: 2px solid black; padding: 5px; align: center"><img src="'.$this->picture.'" alt="student"/><br><br><br>'.$result.'</div></pre>';
	}
}

?>