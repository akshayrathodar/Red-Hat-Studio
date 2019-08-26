<?php
	include("header.php");
?>
<?php
	$no1=$_REQUEST['id'];
    $cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("data1",$cn);
	
	$qry="select * from j1 where id=$no1";
	$rs=mysql_query($qry);
	echo "<form method='post' action='update1.php?id=$no1' enctype='multipart/form-data'>";
	while($ar1=mysql_fetch_array($rs))
	{	
		echo "<br><br><br><br><br>";
		echo "<center>";	
		echo "<table border='2' align='center'>";
		echo "<th colspan=2><font size='+4'><u>Edit Record</th></font><u>";
		echo "<tr><td>";
		echo "NAME:</td><td><input type='text' name='tnm' readonly='true' value='$ar1[1]'><br></td></tr>";
		echo "<tr><td>MOBILE NO.:</td><td><input type='number' name='tmo' readonly='true' value='$ar1[2]'><br></td></tr>";
		echo "<tr><td>EMAIL ID.:</td><td><input type='text' name='temail' readonly='true' value='$ar1[3]'><br></td></tr>";
		echo "<tr><td>EXPERIENCE :</td>";
		echo "<td><select name='exp'>
        	<option>NO experience</option>
            <option>Less Then 1 Year</option>
            <option>1 year</option>
            <option>2 year</option>
            <option>5 year</option>
            <option>10 year</option>
            <option>More than 10 Year</option>
         	</select>";
		echo "<input type='text'  readonly='true' value='$ar1[4]'</td></tr>";
		echo "<tr><td>Expected Salary :</td><td><input type='text' name='tes' value='$ar1[5]'></td></tr>";
		echo "<tr><td>Captures :</td><td><img src='$ar1[img]' height=100 width=100 />
		<input type='file' name='timg'>";
		echo "<tr><td>Photography Skill:</td>";
		echo " <td><select name='skill'>
        		<option>Children</option>
                <option>Wedding</option>
                <option>Professional</option>
                <option>Natural</option>
                <option>Wild Life</option>
              </select>
        	<input type='text' readonly='true' value='$ar1[7]'</td></tr>";
		echo "<tr><td colspan='2' align='center'><input type='submit' name='submit' value='SUBMIT'>";
		echo "<input type='reset' value='RESET'></td></tr>";
		echo "</table>";
		echo "</center>";
		}
?>