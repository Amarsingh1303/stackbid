<?php
$conn = mysqli_connect('localhost','root','','stackbid');
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
$name=$_POST['fname'];
$llname=$_POST['lname'];
$pas=$_POST['pass'];
$phn=$_POST['phone'];
$mail=$_POST['email'];



$sql = "INSERT INTO register (firstname,lastname,pass,phone,email) VALUES ('$name','$llname','$pas','$phn','$mail')";
if(mysqli_query($conn,$sql))
{
    header('location:index.php');
}
else{
    echo "try again".mysqli_error($conn);
}
mysqli_close($conn);
?>
