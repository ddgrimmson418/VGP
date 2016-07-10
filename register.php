<?php 
    extract($_POST);
    $servername = "localhost";
$username = "DDG";
$password = "deepanshu";

// Create connection
$conn = new mysqli($servername, $username, $password,"grievance");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $sql="insert into user(Firstname, Lastname, Email, Username, Contactnumber, Alternatecontactnumber, Hostelblock, Roomnumber,psw,repsw) values('$Firstname', '$Lastname','$Email','$Username','$Contactnumber','$Alternatecontactnumber','$Hostelblock','$Roomnumber','$psw','$repsw' )";

if($conn->query($sql))
{ Echo "<script>alert('registration successful')</script>";
 header('location: index.html');
}
else
    Echo "<script>alert('try again')</script>";
  
    ?>