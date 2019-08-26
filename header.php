<?php
	session_start();
?>
<html>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/comboheader.css">
<body bgcolor="#99CCCC">
<div id="container">
<table width="100%" height="20%">
	<tr>
		<td colspan="6"><center><font color="#FF0000" size="55px">Red</font><font size="55px">Het Studios</font></center> 
        <?php	
			if(isset($_SESSION['user']))
			{
				echo"<center><font size='+2' color='#006699'>WEL-COME :".$_SESSION['user']."</font></center>";
			}
			?>
        
        </td>
	</tr>
    <tr>
    	<td>
        <div class="button-7">
        		<div class="eff-7"></div>
                <a href="home.php">Home</a>
            </div>
        </td>
        <td valign="top" align="center">
        <div id="headermainselection">
        <select  onChange="location=this.value">
        	<option>Settings</option>
        	<option value="job.php">Job Apply</option>
            <option value="book.php">Booking</option>
            <option value="user.php">User</option>
            <option value="ad.php">Admin</option>
         </select>
         </div> 
        </td>
        <td><div class="button-7">
        		<div class="eff-7"></div>
                <a href="feed.php">Contact us</a>
            </div>
        </td>
        <td>
        <div class="button-7">
        		<div class="eff-7"></div>
                <a href="about.php">About us</a>
            </div>
        </td>
		 <td><div class="button-7">
        		<div class="eff-7"></div>
           <a href="photo.php">Gallery</a>
            </div>
        </td>
        <?php
		if(!isset($_SESSION['user']))
		{
         	echo"<td><div class='button-7'>";
	       	echo"<div class='eff-7'></div>";
                echo"<a href='index.php'>Login</a>";
       		   	echo"</div>";
				echo"</td>";
		}
		else
		{
        		echo"<td><div class='button-7'>";
        		echo"<div class='eff-7'></div>";
                echo"<a href='logout.php'>Logout</a>";
            	echo"</div>";
        		echo"</td>";
		}
		?>      
    </tr>
    
</table>

</div>
</body>
</html>