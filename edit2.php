<?php
	include("header.php");
?>
<?php
	$no1=$_REQUEST['id'];
    $cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("data1",$cn);
	
	$qry="select * from f1 where id=$no1";
	$rs=mysql_query($qry);
	echo "<form method='post' action='update2.php?id=$no1'>";
	while($ar1=mysql_fetch_array($rs))
	{
		echo "<br><br><br><br><br>";
		echo "<center>";
		echo "<table border='2' align='center'>";
		echo "<th colspan=2><font size='+4'><u>Edit Record</th></font><u>";
		echo "<tr><td>";
		echo "NAME:</td><td><input type='text' name='tnm' readonly='true' value='$ar1[1]'><br></td></tr>";
		echo "<tr><td>EMAIL ID.:</td><td><input type='text' name='temail' readonly='true' value='$ar1[2]'><br></td></tr>";
		echo "<tr><td>SUBJECT:</td><td><input type='text' name='tsub' value='$ar1[3]'><br></td></tr>";
		echo "<tr><td colspan='2' align='center'><input type='submit' name='submit' value='submit'>";
		echo "<input type='reset' value='RESET'></td></tr>";
		echo "</form>";
		echo "</table>";
		echo "</center>";
	}
	?>
<?php
	include("footer.php");
?>