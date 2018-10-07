<?php
    include 'SPM-sprint-master/Student Registration/DBConnection/dbcon.php';

    $stu_name=$stu_id=$stu_phone=$stu_email=$emp_name=$sup_name="";
    $deg_title=$spec=$duration=$int_title=$comment1=$comment2=$exam_name=$exam_date="";
    $monthly_prog=$int_report=$viva=$total=$credits=0.0;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
		
        $stu_name=$_REQUEST['stu_name'];
        $stu_id=$_REQUEST['stu_id'];
        $stu_phone=$_REQUEST['stu_phone'];
        $stu_email=$_REQUEST['stu_email'];
        $emp_name=$_REQUEST['emp_name'];
        $sup_name=$_REQUEST['sup_name'];
        $deg_title=$_REQUEST['deg_title'];
        $spec=$_REQUEST['spec'];
        $duration=$_REQUEST['duration'];
        $credits=$_REQUEST['credits'];
        $int_title=$_REQUEST['int_title'];
        $comment1=$_REQUEST['comment1'];
        $comment2=$_REQUEST['comment2'];
        $exam_name=$_REQUEST['exam_name'];
        $exam_date=$_REQUEST['exam_date'];
        $monthly_prog=$_REQUEST['monthly_prog'];
        $int_report=$_REQUEST['int_report'];
        $viva=$_REQUEST['viva'];
        $total=$_REQUEST['total'];		
    
    }

    class formi5{
		
		
		function insert($stu_name,$stu_id,$stu_phone,$stu_email,$emp_name,$sup_name,
        $deg_title,$spec,$duration,$credits,$int_title,$comment1,$comment2,$exam_name,$exam_date,
        $monthly_prog,$int_report,$viva,$total){
			
			if(!empty($stu_name) && !empty($stu_id) && !empty($stu_phone) && !empty($stu_email) && !empty($emp_name) && !empty($sup_name)){
				$conn = dbCOn();

				$sql = "INSERT INTO formi7(stu_name, stu_id, stu_phone,stu_email,emp_name,sup_name,deg_title,spec,duration,credits,int_title,comment1,comment2,exam_name,exam_date,monthly_prog,int_report,viva,total)
                VALUES ('$stu_name','$stu_id','$stu_phone','$stu_email','$emp_name','$sup_name','$deg_title','$spec','$duration','$credits','$int_title','$comment1','$comment2','$exam_name','$exam_date','$monthly_prog','$int_report','$viva','$total')";

				if ($conn->query($sql) === TRUE) {
					echo "<script type='text/javascript'>alert('Information Successfully Saved');</script>";
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
	
	$formobj=new formi5;
	$formobj->insert($stu_name,$stu_id,$stu_phone,$stu_email,$emp_name,$sup_name,
    $deg_title,$spec,$duration,$credits,$int_title,$comment1,$comment2,$exam_name,$exam_date,
    $monthly_prog,$int_report,$viva,$total);


?>