<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<marquee id="X"></marquee>


<style>
body {
    margin-left: 10px;
   background-image: url("123.png");
}

.container {
    text-align: center;
}

.center_div {
    border: 1px solid gray;
    margin-left: auto;
    margin-right:auto;
    width: 20%;
    background-color: green;
    text-align: left;
    padding: 8px;
    position:fixed;

    top:30%;
    left:38%;
}
p
{
    font-size:20px;
}
#menu
{
padding: 0px;
position: relative;
margin: 0;
}

#menu li
{
display: inline;
}

#menu li a 
{
background-color: #ffffff;
padding: 10px 20px;
text-decoration: none;
line-height: 2.8em;
color: #034af3;
border-radius: 4px 4px 0 0;
}
#X
{
    color:red;
    background-color:black;
    font-size:20px;
    font-style:bold;
}
#menu li a:hover
{
background-color: #e8eef4;
}
input
{
background-color:cyan;
color:blue;
font-size:20px;
padding-right:15%;
padding-bottom:3%;
}

#123
{
    position:fixed;
    top:20%;
    left:5%;
}
#456
{
position:fixed;
top:20%;
left:5%
}
#789
{
position:fixed;
top:20%;
left:5%
}

</style>

</head>

<body onload="xy()">

<script>
var che;
function xy()
{
 
 che="<?php echo isset($_SESSION['user'])?>";
 if(che)
 {
 var ee="<?php echo $_SESSION['user']?>";
   $("11").innerHTML=ee+"";
   $("21").innerHTML="Logout";
 }
 else 
{
    $("11").innerHTML="Register";
   $("21").innerHTML="Login";
   
}
}

function $(name)
{
    return document.getElementById(name);
}
function reg()
{
if(!che)
{
document.getElementById("X").innerHTML="REGISTRATION";
$("123").style.display="block";
$("456").style.display="none";
$("789").style.display="none";
}
else
{
  $("123").style.display="none";
$("456").style.display="none";
$("789").style.display="block";
}
}


function log()
{
if(!che)
 {$("X").innerHTML="LOGIN";
 $("123").style.display="none";
 $("789").style.display="none";
$("456").style.display="block";
}
else {
window.location.href="qwerty.php";
}
}

</script>
<div class="container">
  <div class="center_div">
    <h1>Image Uploader</h1>
    <p style="color:cyan"><br>We collect students' information!<br><br><br><br></p>
    <ul id="menu">
<li><a href="javascript:reg()" id="11">Register</a></li>
<li><a href="javascript:log()" id="21">Login</a></li>

</ul>
  </div>
</div>
<div id="123" style="display:none"><form action="reg.php" method="post"><input type="text" id="1" name="name" placeholder="Enter name" required/><br><br>
<input type="number" id="2" placeholder="Enter roll number" name="roll" required/><br><br>
<input type="text" id="3" placeholder="Enter department" name="dep" required/><br><br>

<select name="sex" style="background-color:cyan;color:blue;padding-right:22%;padding-bottom:3%;" required>
<option/>
  <option>Male</option>
  <option>Female</option>
</select>
<br><br><input type="password" name="pass" id="5" placeholder="Enter password" required/>
<br><br><input type="password" id="6" name="repass" placeholder="Confirm password" required/><br><br>
<input style="background-color:black;color:red;padding-right:5%;padding-bottom:1%;" type="submit"/>

</form></div>
<div id="456" style="display:none">
<form action="log.php" method="post">
<input type="number" name="roll2" placeholder="Enter roll number" required/><br><br>
<input type="password" name="pass2" placeholder="Enter password" required/><br><br>
<input style="background-color:black;color:red;padding-right:5%;padding-bottom:1%;" type="submit"/>
</form>
</div>
<div id="789" style="display:none">
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>

