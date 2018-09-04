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
    <link rel="stylesheet" href="css/main/style.css" type="text/css">

    <title>Send Form 1-1</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h1>Send the Forms 1-3</h1>
            </div>
            <form class="form-body" action="upload.php" method="post" enctype="multipart/form-data">
					
				
				Select the form to upload:
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Upload File" name="submit">
				
					
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>
