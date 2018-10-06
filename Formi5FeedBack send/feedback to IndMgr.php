<?php
	
	//Declaring variables for html fields
		$id = $name = "";
		
	//Retrieving data from the form5.html
		
		
		//Save data in DB

			
			
             require 'phpmailer/PHPMailerAutoload.php';
             
                  
            $email = 'nimalmanil1234@gmail.com';                    
            $password = 'bandaranayake';
            $to_id = 'ebaysachuu@gmail.com';
            $subject = 'Monthly feedback of'.$id;
					
			$id = $_REQUEST['stu_id'];	
			$name = $_REQUEST['stu_name'];
			$differences = $_REQUEST['diff'];
			$Volume_of_work = $_REQUEST['Volume_of_work'];
			$Quality_of_work = $_REQUEST['Quality_of_work'];
			$problem_resolving = $_REQUEST['problem_resolving'];
			$Analytical_ability = $_REQUEST['Analytical_ability'];
			$Accuracy_thoroughness = $_REQUEST['Accuracy_thoroughness'];
			$Work_Under_Pressure = $_REQUEST['Work_Under_Pressure'];
			$Oral_communications = $_REQUEST['Oral_communications'];
			$Written_communications = $_REQUEST['Written_communications'];
			$Original_critical_thinking = $_REQUEST['Original_critical_thinking'];
			$Ability_to_learn = $_REQUEST['Ability_to_learn'];
			
			$comment1 = $_REQUEST['comment1'];
			$comment2 = $_REQUEST['comment2'];
			$comment3 = $_REQUEST['comment3'];
			$comment4 = $_REQUEST['comment4'];
			$comment5 = $_REQUEST['comment5'];
			$comment6 = $_REQUEST['comment6'];
			$comment7 = $_REQUEST['comment7'];
			$comment8 = $_REQUEST['comment8'];
			$comment9 = $_REQUEST['comment9'];
			$comment10 = $_REQUEST['comment10'];
			
			$positive_char = $_REQUEST['positive_char'];
			$personal_char_dev = $_REQUEST['personal_char_dev'];
			$effect_on_org = $_REQUEST['effect_on_org'];
			$comments = $_REQUEST['comments'];
			$other_comm = $_REQUEST['other_comm'];
					
					$feedBack = 'Differences, between students initial contract and actual assignment which developed: '.$differences.'Volume of Work: '.$Volume_of_work.' Additional comments: '.$comment1..'Quality of Work:'.$Quality_of_work.' Additional comments: '.$comment2.'\n'.'Analytical ability:'.$Analytical_ability.' Additional comments: '.$comment3.'\n'.'Ability to resolve problems:'.$problem_resolving.' Additional comments: '.$comment4.'\n'.'Accuracy and thoroughness:'.$Accuracy_thoroughness.' Additional comments: '.$comment5.'\n'.'Ability to work under pressure:'.$Work_Under_Pressure.' Additional comments: '.$comment6.'\n'.'Oral communications:'.$Oral_communications.' Additional comments: '.$comment7.'\n'.'Written communications:'.$Written_communications.' Additional comments: '.$comment8.'Original and critical thinking:'.$Original_critical_thinking.' Additional comments: '.$comment9.'\n'.'Ability to learn:'.$Ability_to_learn.' Additional comments: '.$comment10.'\n \n \n'.'List positive personal characteristics: '.$positive_char.'\n \n'.'List personal characteristics that will help the student in his/her professional development: '.$personal_char_dev.'\n \n \n'.'How effective has the Internship Program been in meeting the needs of your organization? : '.$effect_on_org.'Please suggest ways you feel we could make our program more meaningful to the student and you, the employer: '.$suggest.'\n \n \n'.'Please comment on the appropriateness of the student academic training as it related to a position in your organization: '.$comments.'\n \n \n'.'Any other comments about the student or on the Faculty Advisor: '.$other_comm;

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'Monthly Feedback');

                    $mail->addReplyTo('replyto@example.com', 'Monthly Feedback');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($feedBack);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Message sent!");</script>';
					   header('Location: https://www.sliit.lk/');
                    }
               
	
?>
