<?php
	 session_start();
	if(!isset($_SESSION["user"]))
	{
		header("location:login.php");
	}
	include("header.php");
?>
<html>
<link rel="stylesheet" href="css/contactuscss.css"/>
<head>
	<script type="text/javascript" src="js/validate.js"></script>
</head>
<body>
<center>
<form name="f1" method="post" action="b1.php">
<table align="center" width="100%">
<tr>
<td colspan="2" align="center"><h1>BOOKING APPOINTMENT</h1></td>
</tr>
<tr>
<td align="right"><font size="+2" color="#0000CC">Enter Your Name :</font></td><td align="center"><input type="text" name="tnm" required onKeyPress="return char(event)" />
</td></tr>
<tr><td align="right"><font size="+2" color="#0000CC">Enter Your Mobile No.:</font></td><td align="center"><input type="text" maxlength="10" name="tmo"  required  pattern="[0-9]{10}" />
</td></tr>
<tr>
<td align="right"><font size="+2" color="#0000CC">Enter Your Email Id :</font></td><td align="center"><input type="email" name="temail" required/>
</td></tr>
<tr>
<td align="right"><font size="+2" color="#0000CC">Enter BookingDate :</font></td><td align="center"><div id="headermainselection">
	<select name="d">
    <?php 
		for($i=1;$i<=31;$i++)
		{
	?>
    <option>
    <?=$i;}?>
    </option>
    </select>
    <select name="mo">
    <?php 
		for($i=1;$i<=12;$i++)
		{
	?>
    <option>
    <?=$i;}?>
    </option>
    </select>
    <select name="y">
    <?php 
		for($i=2017;$i<=2020;$i++)
		{
	?>
    <option>
    <?=$i;}?>
    </option>
    </select>
    </div>
</td></tr>
<tr>
<td align="right"><font size="+2" color="#0000CC">Enter Time :</font></td><td align="center"><div id="headermainselection">
	<select name="h">
    <?php
		for($i=1;$i<=12;$i++)
		{
		?>
        <option>
        <?=$i;}?>
        </option>
        </select>
    <select name="m">
    <?php
		for($i=00;$i<=60;$i=$i+5)
		{
		?>
        <option>
        <?=$i;}?>
        </option>
        </select>
    <select name="ampm">
      <option>AM</option>
        <option>PM</option>
        </select></div>
</td></tr>
<tr>
<td align="right"><font size="+2" color="#0000CC">Enter Your Event :</font></td><td align="center"><input type="text" name="toc" Required/>
</td></tr>
<tr>
<td align="right"><font size="+2" color="#0000CC">Enter Address :</font></td><td align="center"><input type="text" name="tadd" Required/>
</td></tr>
<tr><td colspan="2" align="center">
<input type="submit" value="Submit" onClick="return validate()"/>
<input type="reset" value="Reset" /><br><br><br>
</td></tr>
<tr><td>
<br><br><br>
</td></tr>
</table>
</form>
</center>
</body>
</html>
<?php
	include("footer.php");
?>
