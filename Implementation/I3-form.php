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
                     </form>

                      <div class="sub-section-heading">
                            <h2>Internship Information</h2>
                      </div>
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
                              <input type="text" name="ifrom" class="form-control" placeholder="dd-mm-yyyy">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Period To</label>
                              <input type="text" name="ito" class="form-control" placeholder="dd-mm-yyyy">
                          </div>
                          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                      </form>
                </div>
                <div class="col-md-6">
                       <div class="sub-section-heading">
                            <h2>Internal Training Information</h2>
                      </div>
                      <form class="form-body" method="POST" action="">
                          <div class="form-group">
                             <label for="exampleInputPassword1">Training Party</label>
                             <input type="text" name="itparty" class="form-control"  placeholder="Enter Training Party">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Training Description</label>
                              <input type="text" name="itdescription" class="form-control" placeholder="Enter Description">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Training Period From</label>
                              <input type="text" name="itfrom" class="form-control" placeholder="dd-mm-yyyy">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Training Period To</label>
                              <input type="text" name="itto" class="form-control" placeholder="dd-mm-yyyy">
                          </div>
                          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                      </form>
                </div>
              </div>
          </div>
        </div>
      </div>
  </body>
</html>
