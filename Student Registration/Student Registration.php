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
              <h1>Student Registration</h1>
            </div>
            <form class="form-body">
              <div class="form-group">
                <label for="exampleInputPassword1">First Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Last Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">Gender</label>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confir Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter the same Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>
