<?php
		session_start();
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("data1",$cn);
		
	$nm=$_POST["tnm"];
	$mo=$_POST["tmo"];
	$email=$_POST["temail"];
	$user=$_POST["tuser"];
	$pass=$_POST["tpass"];
	
	$qry="insert into login(nm,mo,email,user,pass) values('$nm',$mo,'$email','$user','$pass')";
	$rs=mysql_query($qry);
	$_SESSION['user']=$user;
	header("location:index.php");		
?>