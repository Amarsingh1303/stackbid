<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" style="text/css" href="hostyle.css">
</head>
<body>
<div id="header">
<h1 align="right">S T A C K B I D</h1>
</div>
<div id="navbar">
<hr width=100%>
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="">ContactUs</a></li>
<li><a href="logout.php">logout</a></li>
</div>
<!--php scripting............................................................................................-->

<?php
$conn = mysqli_connect('localhost','root','','stackbid');
if(!$conn){
    die("connection failed".mysqli_connect_error());
}

$sql = "SELECT id,information,minv,maxv FROM desciption";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo "id:=".$row["id"]."-information:=".$row["information"]."minbid:=".$row["minv"]."max bid:=".$row["maxv"];
        echo "<br>";
    }
}
else{
    echo " not data found";
}
?>
<!--php scripting ending.....................................................................................-->

<div id="footer">

<div id="sub">
<p>ContactUs<br>
H no. 6621,sec -23<br>
sanjay colony<br>
NIT Faridabad<br>
Haryana,121005<br>
</p>
</div>

<div id="sub2">
<p>Working Hours<br>
24x7<br>
</p>
</div>

<div id="sub3">
<p>For Complaints<br>
9999397692<br>
9319548488<br>
</p>
</div>
</div>
<div id="footer2">
<hr>
<p align="center">&copy copyright reserver 2019.</p>
</div>    
</body>
</html>