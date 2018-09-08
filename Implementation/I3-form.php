<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- cdn script imports-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- cdn css import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom script and css import -->
    <script type="text/javascript" src="js/main/script.js"></script>
    <link rel="stylesheet" href="css/main/style.css">

    <title>Student Registration</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <div class="section-heading">
               <h1>Student I3 Form</h1>
              </div>

              <div class="row">
                <div class="col-md-6">
                    <div class="sub-section-heading">
                        <h2>Intern's Information</h2>
                    </div>
                    <?php
                    session_start();
                    $_SESSION['dit']='';
                      if(isset($_POST['submit-intern-details'])){

                         $iname = $_POST['iname'];
                         $iaddress = $_POST['iaddress'];
                         $dit_num = $_POST['dit'];
                         $phone = $_POST['phone'];
                         $email = $_POST['email'];
                         $_SESSION['dit'] = "$dit_num";
                          if( !empty($iname) && !empty($iaddress) && !empty($dit_num) && !empty($phone) && !empty($email)){

                            include 'DBConnection/dbcon.php';

                            $conn = dbCOn();

                            $sql = "INSERT INTO intern_information (name, address, dit_num, contact_num	, email)
                                   VALUES ('$iname', '$iaddress', '$dit_num', '$phone', '$email')";

                             if ($conn->query($sql) === TRUE) {
                                   echo '<script type="text/javascript"> alert ("New record created successfully") </script>';
                             } else {
                                   echo '<script type="text/javascript"> alert ("Error: " . $sql . "<br>" . $conn->error;) </script>';
                             }

                                   $conn->close();
                              }else{
                                  echo '<script type="text/javascript"> alert ("You can\'t have empty fields...") </script>';
                              }

                           }
                       ?>
                    <form class="form-body" method="POST" action="">
                       <div class="form-group">
                         <label for="exampleInputPassword1">Intern's Name</label>
                         <input type="text" name="iname" class="form-control"  placeholder="Enter Intern's Name">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Intern's Private Address</label>
                          <input type="text" name="iaddress" class="form-control" placeholder="Enter Intern's Address">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">DIT Number</label>
                          <input type="text" name="dit" class="form-control" placeholder="Enter DIT Number">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Contact Number</label>
                          <input type="text" name="phone" class="form-control" placeholder="Enter Contact Number">
                      </div>
                      <div class="form-group">
                               <label for="exampleInputPassword1">Email</label>
                               <input type="email" name="email" class="form-control" placeholder="Enter Intern's Address">
                       </div>
                       <input type="submit" name="submit-intern-details" class="btn btn-primary" value="Submit">
                     </form>

                      <div class="sub-section-heading">
                            <h2>Internship Information</h2>
                      </div>
                     <?php
                         if(isset($_POST['submit-internship-details'])){
                            $dit = $_SESSION['dit'];
                            $ititle = $_POST['ititle'];
                            $specialisation = $_POST['specialisation'];
                            $ifrom = $_POST['ifrom'];
                            $ito = $_POST['ito'];
                            /*if($dit == ''){
                                 echo '<script type="text/javascript"> alert ("Fill the Intern\'s Information") </script>';
                            }else*/
                            {
                                if( !empty($ititle) && !empty($specialisation) && !empty($ifrom) && !empty($ito)){

                                include 'DBConnection/dbcon.php';

                                $conn = dbCOn();

                                $sql = "INSERT INTO internship_details (dit_num, titile, specialization, period_from	, period_to)
                                       VALUES ('$dit', '$ititle', '$specialisation', '$ifrom', '$ito')";

                                 if ($conn->query($sql) === TRUE) {
                                       echo '<script type="text/javascript"> alert ("New record created successfully") </script>';
                                 } else {
                                       echo '<script type="text/javascript"> alert ("Error: " . $sql . "<br>" . $conn->error;) </script>';
                                 }

                                       $conn->close();
                                  }else{
                                      echo '<script type="text/javascript"> alert ("You can\'t have empty fields...") </script>';
                                  }
                            }
                          }
                          ?>
                      <form class="form-body" method="POST" action="">
                           <div class="form-group">
                             <label for="exampleInputPassword1">Internship Title</label>
                             <input type="text" name="ititle" class="form-control"  placeholder="Enter Internship Title">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Specialisation</label>
                              <input type="text" name="specialisation" class="form-control" placeholder="Enter Specialisation">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Overall Internship Overall Internship Period From</label>
                              <input type="date" name="ifrom" class="form-control" placeholder="dd-mm-yyyy">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Period To</label>
                              <input type="date" name="ito" class="form-control" placeholder="dd-mm-yyyy">
                          </div>
                          <input type="submit" name="submit-internship-details" class="btn btn-primary" value="Submit">
                      </form>
                </div>
                <div class="col-md-6">
                       <div class="sub-section-heading">
                            <h2>Internal Training Information</h2>
                      </div>
                      <?php
                           if(isset($_POST['submit-training-details'])){
                              $dit = $_SESSION['dit'];
                              $itparty = $_POST['itparty'];
                              $itdescription = $_POST['itdescription'];
                              $itfrom = $_POST['itfrom'];
                              $itto = $_POST['itto'];
                              /*if($dit == ''){
                                   echo '<script type="text/javascript"> alert ("Fill the Intern\'s Information") </script>';
                              }else*/
                              {
                                  if( !empty($itparty) && !empty($itdescription) && !empty($itfrom) && !empty($itto)){

                                  include 'DBConnection/dbcon.php';

                                  $conn = dbCOn();

                                  $sql = "INSERT INTO internship_details (dit_num, party, description, period_from	, period_to)
                                         VALUES ('$dit', '$itparty', '$itdescription', '$itfrom', '$itto')";

                                   if ($conn->query($sql) === TRUE) {
                                         echo '<script type="text/javascript"> alert ("New record created successfully") </script>';
                                   } else {
                                         echo '<script type="text/javascript"> alert ("Error: " . $sql . "<br>" . $conn->error;) </script>';
                                   }    

                                         $conn->close();
                                    }else{
                                        echo '<script type="text/javascript"> alert ("You can\'t have empty fields...") </script>';
                                    }
                              }
                            }
                            ?>

                      <form id="training-form" class="form-body" method="POST" action="">
                          <div class="form-group">
                             <label for="exampleInputPassword1">Training Party</label>
                             <input type="text" name="itparty" class="form-control"  placeholder="Enter Training Party">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Training Description</label>
                              <textarea name="itdescription" class="form-control" form="training-form" placeholder="Enter Description"></textarea>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Training Period From</label>
                              <input type="date" name="itfrom" class="form-control" placeholder="dd-mm-yyyy">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Training Period To</label>
                              <input type="date" name="itto" class="form-control" placeholder="dd-mm-yyyy">
                          </div>
                          <input type="submit" name="submit-training-details" class="btn btn-primary" value="Submit">
                      </form>
                </div>
              </div>
          </div>
        </div>
      </div>
  </body>
</html>
