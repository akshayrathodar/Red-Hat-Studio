<?php
 	 session_start();
	if(!isset($_SESSION["user"]))
	{
		header("location:login.php");
	}
 	include("header.php");
?>
<html>
<head>
	<script type="text/javascript" src="js/validate.js"></script>
</head>
<link rel="stylesheet" href="css/contactuscss.css">
<body>
<form method="post" action="j1.php" enctype="multipart/form-data">
<center>
<table  width="100%">
	<tr>
    	<td colspan="2"><h1><center> 
    	      Job Appointment
    	</center></h1></td>
    </tr>
    <tr>
    	<td align="center"><font size="+2" color="#990033">Enter Your Name :</font></td>
    	<td><input type="text" name="tnm" required onKeyPress="return char(event)" /></td>
    </tr>
    <tr>
    	<td align="center"><font size="+2" color="#990033">Enter Mobile Number :</font></td>
        <td><input type="text" name="tmo" maxlength="10" required pattern="[0-9]{10}"></td>
    </tr>
    <tr>
    <td align="center"><font size="+2" color="#990033">Enter Email ID :</font></td>
    <td><input type="email" name="temail" required></td>
    <tr>
    	<td align="center"><font size="+2" color="#990033">Enter Experience :</font></td>
        <td><div id="headermainselection">
        <select name="exp">
        	<option>NO experience</option>
            <option>Less Then 1 Year</option>
            <option>1 year</option>
            <option>2 year</option>
            <option>5 year</option>
            <option>10 year</option>
            <option>More than 10 Year</option>
         	</select>
            </div>
        </td>
     </tr>
     <tr>
     	<td align="center"><font size="+2" color="#990033">Enter Expected Salary :</font> </td>
        <td><input type="number" name="tsal" maxlength="8" required></td>
     </tr>
     <tr>
     	<td align="center"><font size="+2" color="#990033">Your Captures :</font></td>
        <td><input type="file" name="f1"></td>
     </tr>
     <tr>
    	<td align="center"><font size="+2" color="#990033">Type of Photography Skill You Have:</font></td>
        <td><div id="headermainselection">
        <select name="skill">
        		<option>Children</option>
                <option>Wedding</option>
                <option>Professional</option>
                <option>Natural</option>
                <option>Wild Life</option>
              </select>
              </div>
        </td>
     </tr>
     <tr>
     	<td colspan="2" align="center">
        	<input type="submit" value="Submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     	    <input type="reset" Value="reset"><br><br><br></td>
</tr>
</table>
<br><br><br>	
</center>
</form>
</body>
</html>
<?php
	include("footer.php");
?>