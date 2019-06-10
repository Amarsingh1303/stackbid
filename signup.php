<?php
session_start();

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="sistyle.css">

</head>
<body>
<div id="header">
<h1 align="right">S T A C K B I D</h1>
</div>
<div id="navbar">
<hr width=100%>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="">ContactUs</a></li>
</div>
<br>

<form id="forms" action="register.php" method="POST">
<h2>Fill all the details</h2>
<p>
<div class="row">
<label for="firstname">First Name:</label>
<input type="text" id="firstname" name="fname"><br><br>
</div>

<div class="row">
<label for="lastname">Last Name:</label>
<input type="text" id="lastname" name="lname"><br><br>
</div>

<div class="row">
<label for="password">password:</label>
<input type="text" id="password" name="pass"><br><br>
</div>

<div class="row">
<label for="phone">Phone number:</label>
<input type="tel" id="phone" name="phone"><br><br>
</div>

<div class="row">
<label for="email">Email:</label>
<input type="email" id="email" name="email"><br><br>
</div>


<input id="button" type="submit"><br><br>

</p>
</form>


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
<script src="jquery-3.4.1.js"></script>
<script>
    $(document).ready(function(){

        $("#button").click(function(){
            alert("please check the form properly");


        });




    });



</script>


</body>
</html>