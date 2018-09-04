<?php

function dbCOn(){
  $con = mysqli_connect("localhost","root","","spm_sprint");

  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    return $con;
}
