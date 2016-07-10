<?php
session_start();
include_once "connection.php";
require_once('PHPMailer-master/PHPMailerAutoload.php');
define('GUSER', 'deepanshu.dixit2013@vit.ac.in'); // GMail username
define('GPWD', '16729457'); // GMail password
function smtpmailer($to, $from, $from_name, $subject, $body) {
global $error;
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = GUSER;
$mail->Password = GPWD;
$mail->SetFrom($from, $from_name);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($to);
if(!$mail->Send()) {
$error = 'Mail error: '.$mail->ErrorInfo;
return false;
} else {
$error = 'Message sent!';
echo "Hurrah";
return true;
}
}

$uid=$_SESSION['uname'];
extract($_POST);
if($dept=="default")
{
    die("Plz choose a department");
}
date_default_timezone_set('Asia/Kolkata');
$tst= date('Y/m/d h-i-s A');
$description= htmlspecialchars($_POST['description']);
$sql= "insert into grievance values('$uid', '$description', '$tst','$Subject', '$dept')";

if(mysqli_query($conn,$sql))
{
    $to;
    switch($dept){
            case"hosteldiscipline":
            $to='deepanshuiit2013@gmail.com';
            break;
            case"hostelfood":
            $to='ashu6811singh@gmail.com';
            break;
    }
    $from='deepanshu.dixit2013@vit.ac.in';
    $subj='No reply- Grivance mail to department of '.$dept;
    $from_name='VIT GRIEVANCE PORTAL';
    $message_adm="Username:".$uid."\nSubject: ".$Subject."\n Problem Description:\n".$description."\nSubmitted at: ".$tst."\n\n\n Kidly take neccesary steps to rectify the problem and oblige\n\n\nRegards,\nVIT GREIVANCE PORTAL TEAM";
    $message_usr="Thank You for using the Vit grievance E-portal and we have reported your complain to the management and the shall respond to it as soon as possible";
    smtpmailer($to, $from, $from_name, $subj, $message_adm);
    //smtpmailer($to, $from, $from_name, $subject, $body)
    
    header('location: profile.php');
}
else
    echo "There was some problem plz re-submit your query";
?>