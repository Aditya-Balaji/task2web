<?php session_start(); 
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;

?>
<html>
<body bgcolor="yellow" onload="rr()">
<?php
$username = "adi20483005_demo";
$password = "f9ZYB22uQNF5";
$hostname = "evaldb.espressologic.com"; 

//connection to the database
$roll2=$_POST["roll2"];
$pass2=$_POST["pass2"];

$dbhandle = mysql_connect($hostname, $username,$password);
mysql_select_db('adi20483005_demo');

mysql_select_db('adi20483005_demo');
$retval = mysql_query( $sql, $dbhandle );
mysql_close($dbhandle);
$dbhandle = mysql_connect($hostname, $username,$password);
mysql_select_db('adi20483005_demo');

$query = "SELECT * FROM student";
$result = mysql_query($query,$dbhandle) or die(mysql_error());
$ff=0;
while($row = mysql_fetch_array($result))
	{
 if(($row["roll"]==$roll2)&&$row["pass"]==$pass2)
{ $ff++;}

 }
 if($ff==0)
 {session_destroy();
 
 }
 else
 {$_SESSION['user']=$roll2;
 }
 
 
mysql_close($dbhandle);
 ?>
<script>
function rr()
{
  var fff="<?php echo $ff?>";
  if(fff==0)
  {
    alert("Wrong details");
  }
  else {
alert("Logged in!");
}
window.location.href="index.php";
}
</script>

<a href="index.php">Home</a>
</body>
</html>