<?php
$conn = mysqli_connect('localhost','root','','stackbid');

$text=$_POST['desc'];
$min=$_POST['minb'];
$max=$_POST['maxb'];

$sql="INSERT INTO desciption (information,minv,maxv) VALUES ('$text','$min','$max')";

if(mysqli_query($conn,$sql)){
    echo "your post succefull";
    header('location:home.php');
}
else
{
    echo "try again";
}




?>