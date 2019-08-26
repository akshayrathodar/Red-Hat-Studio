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
	<tr><br /><br /></tr>
	<tr>
    	<td><font size="+4" color="#333333"><b><u>FeedBack</u></b></font></td>
    </tr>
    <tr>
    <td><br /></td>
    </tr>
</table>
</center>
<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("data1",$cn);	
		$qry="select * from  f1";
		$rs=mysql_query($qry);
		
		echo "<center><table border=2 align='center'>";
		echo "<tr>
				<th><font size='+2' color='#0066CC'>NAME</font></th>
				<th><font size='+2' color='#0066CC'>EMAIL</font></th>
				<th><font size='+2' color='#0066CC'>SUBJECT</font></th>
				</tr>";
				echo "<tr>";
			while($ar1=mysql_fetch_array($rs))
		{
			echo "<td><font size='+2' color='#002939'>".$ar1[1]."</font></td>";
			echo "<td><font size='+2' color='#002939'>".$ar1[2]."</font></td>";
			echo "<td><font size='+2' color='#002939'>".$ar1[3]."</font></td>";
						
			echo "<td><a href='edit2.php?id=$ar1[0]'>UPDATE</a></td>";
			echo "<td><a href='del2.php?id=$ar1[0]'>DELETE</a></td>";
			echo "</tr>";
			echo "</center>";
		}
		mysql_close($cn);
		echo "</table></center>";
		
?>
<?php
	include("footer.php");
?>