<?php
session_start();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="homestyle.css">
<!--<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.structure.css">
<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.theme.css">-->
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
<h2>WELCOME TO LOGIN PAGE</h2> 

<?php echo $_SESSION['username'];
?>
<hr>
<hr>

<!--<form id="bid" action="description.php" method="POST">
 <p>describe here your product:</p>
   <textarea name="desc" id="" cols="30" rows="10"></textarea><br><br>
   MIN BID : 
   <input type="number" name="minb">
   <br>  <br>
   MAX BID : 
   <input type="number" name="maxb"><br>  <br>
   <input id="button" type="submit">
</form>-->


<form id="bid" action="description.php" method="POST">
<h2>Describe the product</h2>
<p>
<div class="row">
<label for="area">Write :</label><br>
<textarea name="desc" id="area" cols="30" rows="10"></textarea><br><br>
</div>

<div class="row">
<label for="minbid">Min Bid :</label>
<input type="number" id="minbid" name="minb"><br><br>
</div>

<div class="row">
<label for="maxbid">Max Bid :</label>
<input type="number" id="maxbid" name="maxb"><br><br>
</div>


<input id="button" type="submit"><br><br>

</p>
</form>



<button><a href="browse.php">browse</a></button>
<!--
<div id="features">
<ul>
    <li><b>Features</b></li>
    <ul>
    <li>you can post your things</li>
    <li>you can keep track</li>
    <li>can set min and max bid</li>
    <li>direct txt features</li>
</ul>
</ul>
</div>

<div id="features2">
<ul>
    <li><b>Features</b></li>
    <ul>
    <li>you can post your things</li>
    <li>you can keep track</li>
    <li>can set min and max bid</li>
    <li>direct txt features</li>
</ul>
</ul>

</div>-->








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
            alert("check the details properly");




        });



    });


</script>


</body>
</html>