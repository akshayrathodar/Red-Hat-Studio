<?php
		$no1=$_REQUEST['id'];
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("data1",$cn);
		
		$qry="delete from j1 where id=$no1";
		$rs=mysql_query($qry);
		header('location:job.php');	
?>	