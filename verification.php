<?php
session_start();

?>

<?php
$conn = mysqli_connect('localhost','root','','stackbid');
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

$name = $_GET['uname'];
$pass = $_GET['pw'];

$sql = "SELECT * FROM register where firstname='$name' && pass='$pass'";
$result = mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['username']=$name;
    header('location:home.php');


}
else
{
    header('location:index.php');

}

?>