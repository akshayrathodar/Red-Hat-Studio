<?php
		$no=$_REQUEST['id'];
		if(isset($_POST["submit"]))
		{
			$nm=$_POST['tnm'];
			$mo=$_POST['tmo'];
			$email=$_POST['temail'];
			$a=$_POST["d"];
			$b=$_POST["mo"];
			$c=$_POST["y"];
			$bad=$a."-".$b."-".$c;
			$aa=$_POST["h"];
			$bb=$_POST["m"];
			$cc=$_POST["ampm"];
			$tm=$aa.":".$bb." ".$cc;
			$oc=$_POST["toc"];
			$address=$_POST["tadd"];
		
			$cn=mysql_connect("localhost","root","");
			$db=mysql_select_db("data1",$cn);
		
			$qry="update b1 set nm='$nm', mo=$mo, email='$email', bd='$bad', tm='$tm', oc='$oc', address='$address' where id=$no";
			//echo $qry;
			$rs=mysql_query($qry);
			header("location:book.php");
		}
?>