 <?php 
    extract($_POST);
    $servername = "localhost";
$username = "DDG";
$password = "deepanshu";
session_start();
$_SESSION['uname']=$usrname;

// Create connection
$conn = new mysqli($servername, $username, $password,"grievance");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql="select * FROM user WHERE Username='$usrname'and psw='$psw'";
    $rs = mysqli_query($conn,$sql);
	
	$numrows = mysqli_num_rows($rs);
    
if($numrows==1)
    {
        session_start();
        $_SESSION['valid']='false';
        
       header("location: profile.php");
        }
    else
    {
      
        session_start();
        $_SESSION['valid']='false';
        
        header("location: invalid.html");
               
    }
    ?>