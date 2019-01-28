<?php 
session_start();
unset($_SESSION['invoic']);
$idds= $_GET['iddd'];
echo 'jaya'.$idds;

//$title = strip_tags($id);
//echo substr($title, 4, 6);
$_SESSION["invoic"]=$iddd;
//$_SESSION["invoic"] = substr($title, 4, 5);
echo $_SESSION["invoic"];
echo 'jaya';
echo'<script>window.location="dashboard.php?id=2&d1=";</script>';
?>