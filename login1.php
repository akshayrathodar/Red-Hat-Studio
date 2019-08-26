<?php session_start();
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("data1",$cn);
			
			
		
		if(isset($_POST["user"])&& isset($_POST["pass"]))
		{
			$user=$_POST["user"];
			$pass=$_POST["pass"];
			
			$qry=mysql_query("select * from a1 where user='$user' && pass='$pass'");
			
				if(mysql_num_rows($qry)>0)
				{
					$_SESSION['user']=$user;
					$_SESSION['pass']=$pass;

					header("location:home.php");
				}
				else
				{
					header("location:index.php");
				}
				mysql_close($cn);
				
		}
?>


