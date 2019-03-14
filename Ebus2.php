<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
         session_start();
        $fullNameValue = "" ;
        $totalValue2 = "";
        
        /*
         * Creat a session variable for the mobile number
         */
        $totalValue = filter_input(INPUT_POST, 'txtTotal')['txtTotal'] ;
        $_SESSION['txtName'] = $fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
        
        /**
         * Allocate the mobile number session variable to a text box
         */
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enter in details</title>
         <link rel="stylesheet" href="ebusstyle.css" type="text/css" />
    </head>
    <body>
          <script type="text/javascript">
      function validateForm() {
          var x = document.forms["Details"]["txtName"].value;
          if (x === "") {
              alert("Information must be filled out");
              return false;
          }
      }
      
    </script>    
        <div class="form">
            <form name="Details" method="post" action="eBUS3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Please enter your payment details</b></td>
                        </tr>
                        <tr>
                            <td>Name</td> 
                            <td><input type="text" id="txtName" name="txtName" value=""/></td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                        </tr>
                        <tr>
                            <td>Pin</td>
                            <td><input type="text" id="txtPassword" name="txtPasword" value="" /></td>
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
                <center>
                    
                    
                    <input class="button4"type="submit" name="btnContinue" id="btnContintue" onclick="" value="Proceed with Purchase"/> <br/>
                    <input class="button5"type="button" name="btnValidate" id="btnValidate" onclick="validateForm()" value="Validate"/>
                </center>
            </form>                 
        </div>
    </body>
          
</html>
