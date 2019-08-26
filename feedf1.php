<?php
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("data1",$cn);
		
	$nm=$_POST["tnm"];
	$email=$_POST["temail"];
	$sub=$_POST["tsub"];
	
	$qry="insert into f1(Name,email,feed)values('$nm','$email','$sub')";
	$rs=mysql_query($qry);
	
	header("location:allinone.php");	
?>