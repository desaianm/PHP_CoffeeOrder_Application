<!DOCTYPE html>
<!--
Anmol Desai
Student ID:991515637
SYST10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Tim Horton's </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
       
        <h1><img src="images/logo.jpg" height="100" width="200 ">  </img></h1>
        <div id="content">
        
        <form action="order.php" method="POST">
        <div id="data">
                <br><br>
		<label> Coffee :</label>
		<input type="number" name="quantity"><br><br>
		<label> Size : </label>
                <select name="Size" >
                <option name="Small" value="Small"> Small </option>
                <option name="Medium" value="Medium"> Medium </option>
                <option name="Large" value="Large"> Large </option>
                </select><br><br>
                <label> How much Cream ?</label>
                <input type="number" name="cream_quant"><br><br>
                <label> How much Sugar ?</label>
                <input type="number" name="sugar_quant"><br><br>
                </div>
                <div id="buttons">
		<label>&nbsp;</label>
		<input type="submit" value="Order Coffee"><br>
		
                </div>
        </form>    
        </div>        
    </body>
</html>
