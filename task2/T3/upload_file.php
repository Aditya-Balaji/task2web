<?php session_start();?>
<html>
<body>
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("localhost/" . $_SESSION['user'])) {
      echo "already exists.";
    } else {
      if(move_uploaded_file($_FILES["file"]["tmp_name"],
      "localhost/".$_SESSION['user'])){
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "localhost/".$_SESSION['user']);
      echo "Stored in: " . "localhost/" .$_SESSION['user'] ;
      
      }
      
      
    }
  }
} else {
  echo "Invalid file";
}
?>
</body>
</html>