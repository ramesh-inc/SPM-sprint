<?php

	    include 'SPM-sprint-master/Student Registration/DBConnection/dbcon.php';
	
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
			$cgpa = $_REQUEST['cgpa'];		
		
		}
		
			
	class studenti1{
		
		//Save data in DB
		function storeData($id, $name, $address,$hphone,$mphone,$email,$semester,$year,$cgpa){
			
			if(!empty($id) && !empty($name) && !empty($address) && !empty($hphone) && !empty($mphone) && !empty($email) && !empty($cgpa)){
				$conn = dbCOn();

				$sql = "INSERT INTO formi1 (SID, S_name, S_address, S_home_phone, S_mobile_phone, S_email,semester,year,CGPA)
						VALUES ('$id', '$name', '$address','$hphone','$mphone','$email','$semester','$year','$cgpa')";

				if ($conn->query($sql) === TRUE) {
					echo "<script type='text/javascript'>alert('New Record Created Successfully');</script>";
					 header('Location: https://www.sliit.lk/');
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
					echo "<script type='text/javascript'>alert('Error: '.$sql.'<br>'.$conn->error.'');</script>";
				}
	
				$conn->close();
				}
				else{
					 echo "<script type='text/javascript'>alert('Fill all the fields');</script>";
				}
		
			}
	}
	
	$stuObj=new studenti1;
	$stuObj->storeData($id, $name, $address,$hphone,$mphone,$email,$semester,$year,$cgpa);
	
?>

