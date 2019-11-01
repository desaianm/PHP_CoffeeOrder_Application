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
        <?php
            $Size = $_REQUEST['Size'];
            $quantity = $_REQUEST["quantity"];
            $cream_quant =  $_REQUEST["cream_quant"];
            $sugar_quant = $_REQUEST["sugar_quant"];
            $smallprice= 1;
            $tax = $smallprice * 13/100;
            $smalltotal = $smallprice + $tax;
            $mediumprice= 1.5;
            $tax = $mediumprice * 13/100;
            $mediumtotal = $mediumprice + $tax;
            $largeprice= 2;
            $tax = $largeprice * 13/100;
            $largetotal = $largeprice + $tax;
            $sizeer = $quanter = $creamer = $sugarer = "";
            
            
            
            ?>
        <div id = "con">
            
            <?php
            if($quantity>=1){
                echo "<label> The Coffee Price is </label>"; 
            
                
            }
            
            
            if($Size === "Small"and $quantity >=1){
                $smallprice= 1* $quantity;
                $tax = $smallprice * 13/100;
                $smalltotal = $smallprice + $tax;
                if($quantity>=1){
                echo $smallprice;
                echo ' Total Price with Tax is '.$smalltotal.'<br>';
                }
                for ($index = 1; $index <= $quantity; $index++) {
                
                echo'<img src="images/cup.jpg" width="40" height="100" />';
                echo '<img src="images/plus.jpg" width="30" height="30" />';
            
                }
                }
            elseif($Size === "Medium"){
                $mediumprice= 1.5 *$quantity;
                $tax = $mediumprice * 13/100;
                $mediumtotal= $mediumprice + $tax;
                if($quantity>=1){
                echo $mediumprice;
                echo ' Total Price with Tax is '.$mediumtotal.'<br>';
                }
                for ($index = 1; $index <= $quantity; $index++) {
                
                echo'<img src="images/cup.jpg" width="60" height="150" />';
                echo '<img src="images/plus.jpg" width="30" height="30" />';
            
                }
                }
            elseif($Size === "Large"){
                $largeprice = 3 * $quantity;
                $tax = $largeprice * 13/100;
                if($quantity>=1){
                $largetotal= $largeprice+$tax;
                echo $largeprice;
                }
                echo '<br> Total Price with Tax is '.$largetotal.'<br>';
                for ($index = 1; $index <= $quantity; $index++) {
                
                echo'<img src="images/cup.jpg" width="80" height="190" />';
                echo '<img src="images/plus.jpg" width="30" height="30" />';
                }
            }
            else{
                $sizeer = "size is required";
            }
            
            if($quantity>=1){
                
            if($cream_quant>=0){
                echo '<br> Cream is '.$cream_quant.'<br> ';
                for ($index = 1; $index <= $cream_quant;$index++) {
                     
                echo '<img src="images/cream.jpg" width="30" height="50" />';
                echo '<img src="images/plus.jpg" width="15" height="20" />';
                
                }
            }
            else{
                
                $creamer = "cream is Required";
            }
            if($sugar_quant>=0){
                echo '<br> Sugar  is '.$sugar_quant.' <br> ';
            
                for ($i = 1; $i<=$sugar_quant;$i++) {
                echo '<img src="images/sugar.jpg" width="30" height="50" />';
                echo '<img src="images/plus.jpg" width="30" height="30" />';    
                }
                
            } 
            else{
                
                 $sugarer = "sugar is required";
            }
            }
             
            ?>
            <label id="error"> <?php  
            echo " $sizeer <br>";
            echo" $creamer <br>";
            echo" $sugarer <br>";
            echo" $quanter <br>";
             ?></label>
        </div>
        
       
            
        
        
        
        
        
    </body>
</html>
