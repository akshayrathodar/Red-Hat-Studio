<?php
		$no=$_REQUEST['id'];
		if(isset($_POST["submit"]))
		{
			$nm=$_POST['tnm'];
			$email=$_POST['temail'];
			$sub=$_POST['tsub'];
	
			$cn=mysql_connect("localhost","root","");
			$db=mysql_select_db("data1",$cn);
	
			$qry="update f1 set Name='$nm', email='$email', feed='$sub' where id=$no";
			
			//echo $qry;
			$rs=mysql_query($qry);
			header("location:feed.php");
		}
?>