<?php
$dir = $_GET['dir'];
rmdir($dir);
header("Location:index.php")
?>
