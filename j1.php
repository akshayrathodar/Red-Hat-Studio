<?php
			
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("data1",$cn);
		if(isset($_FILES['f1']['name']))
		{
			$d="../upload/".$_FILES['f1']['name'];
			$s=$_FILES['f1']['tmp_name'];
			move_uploaded_file($s,$d);
			$nm=$_POST["tnm"];
			$mo=$_POST["tmo"];
			$email=$_POST["temail"];
			$ex=$_POST["exp"];
			$es=$_POST["tsal"];
			$skill=$_POST["skill"];
			$qry="insert into j1(nm,mo,email,ex,es,img,skill) values('$nm','$mo','$email','$ex','$es','$d','$skill')";
			$rs=mysql_query($qry);
		}	
	header("location:jobform.php");	
?>