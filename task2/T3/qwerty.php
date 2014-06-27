<?php
session_start();
session_destroy();
$_SESSION=array();
?>
<html>
<body onload="fp()">
<script>
function fp()
{
  window.location.href="index.php";
}
</script>
</body>
</html>