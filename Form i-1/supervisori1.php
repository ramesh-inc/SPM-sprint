<?php

	//Declaring variables for html fields
	$id = $ename = $sname = $eaddress = $saddress = $sphone = $stitle = $semail = $sdate = $edate = $date = $task = $learn = $esname = "";
	$cgpa = $semester = $year = 0;
	
	
	//Retrieving data from the supervisori1.html
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$id = $_REQUEST['sid'];	
		$ename = $_REQUEST['employer_name'];
		$sname = $_REQUEST['supervisor_name'];
		$eaddress =  $_REQUEST['employer_address'];
		$sphone = $_REQUEST['supervisor_phone'];
		$stitle = $_REQUEST['supervisor_title'];
		$semail = $_REQUEST['supervisor_email'];
		$sdate = $_REQUEST['sdate'];
		$edate = $_REQUEST['edate'];
		$date = $_REQUEST['date'];
		$task = $_REQUEST['task'];
		$learn = $_REQUEST['learn'];
		$esname = $_REQUEST['external_supervisor'];
		
	}

?>

