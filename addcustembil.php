<?php session_start(); ?>

<?php

include('connect.php');
$a="BILL".$_GET['billNo'];
$cust=$_GET['cus'];
$dat=date("Y/m/d");
		$_SESSION["invoic"] = $a;
		$_SESSION["cus"] =$cust;
		$inno=$_SESSION["invoic"];
		$sql = "INSERT INTO invoice (InvoiceNo,CustmerID,Date) VALUES (:a,:b,:c)";
		$q = $db->prepare($sql);
		$q->execute(array(':a'=>$inno,':b'=>$cust,':c'=>$dat));
		header("location: dashboard.php?id=2&cus=");
		//echo $_SESSION["invoic"];

?>