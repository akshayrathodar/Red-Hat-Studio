<?php
include("header.php");
?>
<html>
<link rel="stylesheet" href="css/logincss.css">
<body>
<form method="post" action="login1.php">
<table height="60%" width="100%">
	<tr>
    	<td>
        <div class="login">
        <input type="text" placeholder="username" id="username" name="tuser">
        <input type="password" placeholder="password" id="password" name="tpass">
        <a class="forgot" href="newuser.php"> New User?</a>
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