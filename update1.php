<?php
		$no=$_REQUEST['id'];
		if(isset($_POST["submit"]))
		{
			$nm=$_POST['tnm'];
			$mo=$_POST['tmo'];
			$email=$_POST['temail'];
			$ex=$_POST['exp'];
			$es=$_POST['tes'];
			$skill=$_POST['skill'];
			//$d="upload/".$_FILES['timg']['name'];
			//$a="../upload/".$_FILES['timg']['name'];
			//$s=$_FILES['timg']['tmp_name'];
			//move_uploaded_file($s,$d);
			
		
			$cn=mysql_connect("localhost","root","");
			$db=mysql_select_db("data1",$cn);
				$d="upload/".$_FILES['timg']['name'];
				$a="../upload/".$_FILES['timg']['name'];
				$s=$_FILES['timg']['tmp_name'];
				move_uploaded_file($s,$a);

		if($_FILES['timg']['name']=="")
		{
				$qry="update j1 set nm='$nm', mo=$mo, email='$email', ex='$ex', es='$es',skill='$skill' where id=$no";

		}
		else
		{
			$qry="update j1 set nm='$nm', mo=$mo, email='$email', ex='$ex', es='$es', img='$a',skill='$skill' where id=$no";
		}
			//echo $qry;
			$rs=mysql_query($qry);
			header("location:job.php");
		}
?>