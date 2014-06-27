<html>
<body bgcolor="yellow">
<?php
$username = "adi20483005_demo";
$password = "f9ZYB22uQNF5";
$hostname = "evaldb.espressologic.com"; 

//connection to the database
$name=$_POST["name"];
$roll=$_POST["roll"];
$dep=$_POST["dep"];
$sex=$_POST["sex"];
$pass=$_POST["pass"];
$repass=$_POST["repass"];
if($pass==$repass){
$dbhandle = mysql_connect($hostname, $username,$password);
mysql_select_db('adi20483005_demo');

$sql = "INSERT INTO student ".
       "(name,roll ,dep,sex,pass) ".
       "VALUES ".
       "('$name','$roll','$dep','$sex','$pass')";
mysql_select_db('adi20483005_demo');
$retval = mysql_query( $sql, $dbhandle );
mysql_close($dbhandle);
$dbhandle = mysql_connect($hostname, $username,$password);
mysql_select_db('adi20483005_demo');

$query = "SELECT * FROM student";
$result = mysql_query($query,$dbhandle) or die(mysql_error());
while($row = mysql_fetch_array($result))
	{echo $row['name'];
 }
 
mysql_close($dbhandle);}
else
echo "confirm properly"; ?>


<a href="index.php">back</a>
</body>
</html>