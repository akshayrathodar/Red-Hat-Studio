<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("data1",$cn);
		
	$nm=$_POST["tnm"];
	$mo=$_POST["tmo"];
	$email=$_POST["temail"];
	$a=$_POST["d"];
	$b=$_POST["mo"];
	$c=$_POST["y"];
	$bd=$a.-$b.-$c;
	$aa=$_POST["h"];
	$bb=$_POST["m"];
	$cc=$_POST["ampm"];
	$tm=$aa.":".$bb." ".$cc;
	$oc=$_POST["toc"];
	$address=$_POST["tadd"];
	
$qry="insert into b1(nm,mo,email,bd,tm,oc,address)values('$nm',$mo,'$email','$bd','$tm','$oc','$address')";
	//echo $qry;
	$rs=mysql_query($qry);
	header("location:bookingform.php");
		
		
?>