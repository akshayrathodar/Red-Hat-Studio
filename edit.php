<?php
	include("header.php");
?>
<?php
	$no1=$_REQUEST['id'];
    $cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("data1",$cn);
	
	$qry="select * from b1 where id=$no1";
	$rs=mysql_query($qry);
	echo "<form method='post' action='update.php?id=$no1'>";
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
		echo "<tr><td>BOOKING DATE:</td>";
		echo "<td>";
		
?>
	
    <select name='d'>
    <?php 
		for($i=1;$i<=31;$i++)
		{
	?>
    <option>
    <?=$i;}?>
    </option>
    </select>
    <select name='mo'>
    <?php 
		for($i=1;$i<=12;$i++)
		{
	?>
    <option>
    <?=$i;}?>
    </option>
    </select>
    <select name='y'>
    <?php 
		for($i=2017;$i<=2020;$i++)
		{
	?>
    <option>
    <?=$i;}?>
    </option>
    </select>
    <?php
	echo "<input type='text' value='$ar1[4]' readonly='true'>"
	?>
    <br>
    <?php
		echo "</td></tr>";
		echo "<tr><td>";
		echo "TIME :</td>";
		echo "<td>";
	?>
    <select name='h'>
    <?php
		for($i=1;$i<=12;$i++)
		{
	?>
        <option>
        <?=$i;}?>
        </option>
        </select>
    <select name='m'>
    <?php
		for($i=00;$i<=60;$i=$i+5)
		{
	?>
        <option>
        <?=$i;}?>
        </option>
        </select>
    <select name='ampm'>
      <option>AM</option>
        <option>PM</option>
        </select>
        <?php
	echo "<input type='text' value='$ar1[5]'readonly='true'>"
	?>
        <br />
    <?php
		echo "</td></tr>";
		echo "<tr><td>OCCASION NAME :</td><td> <input type='text' name='toc' value='$ar1[6]'><br></td></tr>";
		echo "<tr><td>ADDRESS:</td><td><input type='text' name='tadd' value='$ar1[7]'><br></td></tr>";
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