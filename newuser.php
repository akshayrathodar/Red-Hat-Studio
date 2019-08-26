<?php
	include("header.php");
?>
<html>
<head>
	<script type="text/javascript" src="js/validate.js"></script>
</head>
<link rel="stylesheet" href="css/contactuscss.css">
<form method="post" action="na1.php">
<table align="center" width="100%">
<tr>
<td colspan="2"align="center"><h1>CREATE NEW ACCOUNT</h1></td>
</tr>
<tr>
<td align="center"><font size="+2" color="#990033">Enter Your Name :</font> </td><td><input type="text" name="tnm" required onKeyPress="return char(event)"/>
</td></tr>
<tr><td align="center"><font size="+2" color="#990033">Enter Your Mobile No. :</font></td><td><input type="text" name="tmo" maxlength="10" required pattern="[0-9]{10}"/>
</td></tr>
<tr>
<td align="center"><font size="+2" color="#990033">Enter Your Email Id :</font></td><td><input type="email" name="temail" required/>
</td></tr>
<tr>
<td align="center"><font size="+2" color="#990033">Enter UserName :</font></td><td><input type="text" name="tuser" required/>
</td></tr>
<tr>
<td align="center"><font size="+2" color="#990033">Enter Password :</font></td><td><input type="password" name="tpass" required/>
</td></t	r>
<tr><td colspan="2" align="center">
<input type="submit" value="Submit" />
<input type="reset" value="Reset" />
<br><br>
</td></tr>
</table>
</form>
</html>
<?
	include("footer.php");
?>
