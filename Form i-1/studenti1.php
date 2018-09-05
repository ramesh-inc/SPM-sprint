<?php

	//Declaring variables for html fields
		$id = $name = $address = $hphone = $mphone = $email = "";
		$cgpa = $semester = $year = 0;
		
		
	
	//Retrieving data from the studeni1.html
		if($_SERVER["REQUEST_METHOD"] == "POST"){
		
			$id = $_REQUEST['id'];	
			$name = $_REQUEST['name'];
			$address =  $_REQUEST['address'];
			$hphone = $_REQUEST['hphone'];
			$mphone = $_REQUEST['mphone'];
			$email = $_REQUEST['email'];
			$semester = $_REQUEST['semester'];
			$year = $_REQUEST['year'];
			
			
		
		}
		
			
	class studenti1{
		
		//Save data in DB
		function storeData($test){
			echo $test;
			//DB code here
		}

	}
	
	$stuObj=new studenti1;
	$stuObj->storeData($id);
	mail("sachithasa@gmail.com","gg","gggg");
?>

