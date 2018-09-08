<!DOCTYPE html>
<html>
<head></head>

<body>
<?php


	include 'SPM-sprint-master/Student Registration/DBConnection/dbcon.php';
	
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
	
	class supervisori1{
		
		//Save data in DB
		function storeData($id, $ename,$sname,$eaddress,$sphone,$stitle,$semail,$sdate,$edate,$date,$task,$learn,$esname){
			
			if(!empty($id) && !empty($ename) && !empty($sname) && !empty($eaddress) && !empty($sphone) && !empty($stitle) && !empty($semail) && 
						!empty($sdate) && !empty($edate) && !empty($date) && !empty($task) && !empty($learn) && !empty($esname)){
				$conn = dbCOn();

				$sql = "UPDATE formi1 SET E_name='$ename' ,E_address='$eaddress',SU_name='$sname',SU_phone='$sphone',SU_email='$semail',SU_title='$stitle',startDate='$sdate',endDate='$edate',expected='$task',learn='$learn',EXSU_name='$esname',date='$date'
						WHERE SID='$id'";

				if ($conn->query($sql) === TRUE) {
					echo "<script type='text/javascript'>alert('New Record Created Successfully');</script>";
					header('Location: https://www.sliit.lk/');
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
					echo "<script type='text/javascript'>alert('Error: '.$sql.'<br>'.$conn->error.'');</script>";
				}
	
				echo "THANK YOU";
				$conn->close();
				}
				else{
					 echo "<script type='text/javascript'>alert('Fill all the fields');</script>";
				}
		
			}
	}
	
	$supObj=new supervisori1;
	$supObj->storeData($id, $ename,$sname,$eaddress,$sphone,$stitle,$semail,$sdate,$edate,$date,$task,$learn,$esname);

?>
</body>
</html>

