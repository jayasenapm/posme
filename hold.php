<?php
session_start();
include('connect.php');
$dd=$_SESSION["invoic"];
$jaya=substr($dd, 0, 1);

if($jaya=='B'){
	$inv=$_SESSION["invoic"];
}else{
	$inv="#000".$_SESSION["invoic"];
}

$sql = "UPDATE invoice SET hold = :a WHERE InvoiceNo =:id";
		$query2 = $db->prepare($sql);
        $query2->bindValue(":a", 'Yes');
		$query2->bindValue(":id", $inv);
		
		$result2 = $query2->execute();
		echo'<script>window.location="welcome.php?id=2";</script>';


?>