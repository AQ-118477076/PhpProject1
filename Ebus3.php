<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reciept</title>
         <link rel="stylesheet" href="ebusstyle.css" type="text/css" />
         <style>
             body {
                 text-align: center;
             }
         </style>
    </head>
    <body>
        <h2>Purchase Reciept</h2>
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'] ;
        $phonenumber = $_POST['txtNum'] ;
        echo "Name:" , $fullNameValue, "." ;
        echo "<br></br>";
        echo "Mobile:" , $phonenumber ;
        echo "<br></br>" ;
        echo "Total Price:" , $totalValue2, "."; 
        ?>
    </body>
</html>
