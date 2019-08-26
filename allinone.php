<?php
	include("header.php");
?>
<html>
<link rel="stylesheet" href="css/contactuscss.css" />
<body>
	<table width="100%">
    	<tr>
        	<td width="60%">
            	<table>
                	<tr>
                    	<td colspan="2" align="center">
            				<img src="map.gif">
            			</td>
                    </tr>
                    <tr>
                    	<td width="40%"><table width="100%">
                    	<tr>
                        	<td align="center"><font size="+3" color="#FF0000">Address :</font></td> 
                        </tr>
                        <tr>
                        	<td align="center"><font size="+3" color="#990033">RedHet Studios,<br>901,
                            <br>Impireal Palace A,<br>Rajkot-360002</font>
                            </td>
                        </tr>
                	</table></td>
                        <td><table>
                    	<tr>
                        	<td align="center"><font size="+3" color="#FF0000">Contact Details</font></td> 
                        </tr>
                        <tr>
                        	<td align="center"><font size="+3" color="#990033"><hr>Email Id : redhetstudios@gmail.com<hr>
               Facebook:<hr>http://www.facebook.com/RedHet Studio<hr>Phone no : 0281-2460012<br><hr>Mobile NO:94290 76228</font></td>
                        </tr>
               	</table></td>
                    </tr>
                 </table>
            </td>
            <td width="40%">
            <div class="container">
    	<table width="100%">
        <tr>
        	<td>
            <center>
            <form action="feedf1.php" method="post">
            	<h1>FeedBack Form</h1>
                <label for="fname"><h2>Name:</label><input type="text" name="tnm" placeholder="your name..."required></h2><br>
                <label for="lname"><h2>Email ID.:</label><input type="email" name="temail" placeholder="Email ID.........." required></h2><br>
                <table>
                	<tr>
                    	<td valign="top">
                <label for="subject"><h2>Subject :&nbsp;</h2></label></td><td><textarea id="subject" name="tsub" placeholder="write something" style="height:200px; width:300px;" required></textarea>
                		</td>
                     </tr>
                 </table>
                <br>
                <input type="submit" value="submit" name="submit"/>
          	     <br>
            </form>
            </center>
        </td>
        </tr>
        </table>
       </div>
            </td>
        </tr>
    <tr>
    <td align="center">
           	 		
            </td>
            <td align="center">
           	 		
            </td>
    </tr>
    <tr>
    </tr>
    <tr>
    <br><br><br>
    </tr>
</table>
<br><br><br>
</body>
</html>
<?php
	 include("footer.php");
?>