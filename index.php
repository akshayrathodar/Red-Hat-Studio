<html>
<link rel="stylesheet" href="css/logincss.css">
<body bgcolor="#006666">
<form method="post" action="login1.php">
<center>
<table>
	<tr>
    	<td align="center"> <font color="#FF0000" size="55px">Red</font><font size="55px">Hat Studios</font><br><hr><font size="+4" color="#FF0000">Admin Login</font></td>
    </tr>
</table>
</center>
<table height="60%" width="100%">
	<tr>
    	<td>
        <div class="login">
        <input type="text" placeholder="username" id="username" name="user">
        <input type="password" placeholder="password" id="password" name="pass">
      
        	<input type="submit" value="Sign in">
         </div>
         <div class="shadow"></div>
         </td>
        </tr>
</table>
</form>
</body>
</html>
<?php
	include("footer.php");
?>