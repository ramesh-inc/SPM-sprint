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
                  <h1>Schedules the Viva</h1>
                </div>

            <?php
               if(isset($_POST['submit'])){

                 $exname = $_POST['exname'];
                 $dit = $_POST['std_dit'];
                 $date = $_POST['date'];
                 $time = $_POST['time'];;

                   if( !empty($exname) && !empty($dit) && !empty($date) && !empty($time)){

                           include 'DBConnection/dbcon.php';

                             $conn = dbCOn();

                              $sql = "INSERT INTO viva_schedule (examinar_name, std_dit, date_v, time_v)
                                      VALUES ('$exname', '$dit', '$date', '$time')";

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
                  <label for="exampleInputPassword1">Examinar Name</label>
                  <input type="text" name="exname" class="form-control"  placeholder="Enter First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Student DIT</label>
                  <input type="text" name="std_dit" class="form-control" placeholder="Enter Address">
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" name="date" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Time</label>
                    <input type="time" name="time" class="form-control" placeholder="Enter Password">
                  </div>
                  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
              </form>
          </div>
        </div>
      </div>
   </body>
</html>