<?php
 session_start();
	if(!isset($_SESSION["user"]))
	{
		header("location:index.php");
	}
	include("header.php");

?>
<center>
<table>
<tr>
	<td>
	<font size="+5" color="#333333"><b><u>Admin Details<b><u></font>
    </td>
</tr>
<tr>
   <td><br /></td>
</tr>
</table>
</center>
<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("data1",$cn);
		
		$qry="select * from a1";
		$rs=mysql_query($qry);
		echo "<center>";
		echo "<table border=2>";
		echo "<tr>
				<th><font size='+2' color='#0066CC'>USER NAME</font></th>
				<th><font size='+2' color='#0066CC'>PASSWORD</font></th>
				</tr>";
		while($ar1=mysql_fetch_array($rs))
		{
			echo "<tr>";
			echo "<td><font size='+2' color='#002939'>".$ar1[1]."</font></td>";
			echo "<td><font size='+2' color='#002939'>".$ar1[2]."</font></td>";
			
			//echo "<td><a href='edit.php?id=$ar1[0]'>UPDATE</a></td>";
			//echo "<td><a href='del3.php?id=$ar1[0]'>DELETE</a></td>";
			echo "</tr>";
			echo "</center>";
		}
		mysql_close($cn);
		echo "</table>";
		
?>
<?php
	include("footer.php");
?>