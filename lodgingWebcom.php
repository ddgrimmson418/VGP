<html>
    <body>   <?php
include_once "connection.php";
extract($_POST);

$description= htmlspecialchars($_POST['description']);
$sql= "insert into webcomp values('$Subject','$description','$email')";
if(mysqli_query($conn,$sql))
{
    $msg=$description."\n\n".$email;
    echo "<h2 style='margin:25% 25% 25% 25%'>Thank You for Writing In!!! We Will Look Into it as soon as possible </h2>";
    mail("deepanshu.dixit2013@vit.ac.in",$Subject, $msg );
}
else
    echo "<h2 style='margin:50% auto'>There was some problem plz re-submit your query </h2>";
?>
        </body>
 
    </html>