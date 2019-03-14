<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
     <style>
            body {
                background-color: #FFFFFF ;
                text-align: center ;
                font-family: 'open-sans' ;
                color:  #000000 ;
                font-size: 18px; 
            }
            
            h1 {
                font-family: 'Pacifico';
                color: #20B2AA
            }
            
            h2 {
                font-family: 'Pacifico';
            }
            h3  {
                font-family: 'Pacifico';
                color: #20B2AA
            }
        </style>
    <body>
    <head>
        <meta charset="utf-8" />
        <title>Consulting Services</title>
        <link rel="stylesheet" href="ebusstyle.css" type="text/css" />
    </head>
        <body>
        <div class="form">
            <form name="intCalc" method="post" action="ebus2.php">
        <h1>Select a Consulting Service</h1>    
        <hr/>
        <center>
            <table cellspacing="10">
                <tr>
                    <td>Blockchain @ $1000</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td>Autonomous Things (Robots) @ $2000</td>
                    <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience @ $3000</td>
                    <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <br/>
                <tr>
                    <td>Discount @ 10%
                        <br /> (- Disccount)
                    </td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <br/>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <br/>
                <tr>
                    <td>Total
                        <br /> (- Discount + VAT)
                    </td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
        
        <br />
            <center>
            <input class="button1" type="submit" name="btnProceed" id="btnProceed" onclick="" value="Add to Shopping Cart"/> <br/>
            <input class="button2" type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Cost"/>
            <input class="button3" type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear Choice"/>
            
        </center>
            </form>
        </div>
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                    var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calcDispVatTotalDisc(subAmount);
                        
                    }
                   else if (document.getElementById('AutonomousThings').checked) {
                        document.intCalc.txtSubTot.value = AutonomousThings;
                        subAmount = AutonomousThings;
                        calcDispVatTotalDisc(subAmount);
                        
                    }
                    else if (document.getElementById('ImmersiveExperience').checked) {
                        document.intCalc.txtSubTot.value = ImmersiveExperience;
                        subAmount = ImmersiveExperience;
                        calcDispVatTotalDisc(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calcDispVatTotalDisc(parmSubTotal) {
                    var argSubTotal = parseFloat(parmSubTotal);
                    var discCalc = parseFloat(argSubTotal * .10);
                    var vatCalc= parseFloat(argSubTotal * .20);    
                    var total = parseFloat(argSubTotal - discCalc + vatCalc);
                    
                    //Inserting thrm intp thr correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
          <br />
          <br />
          <br />
            <a href="index.php"> Return to Website Menu </a>
            <br />
            <br />
              <a href="ConsultingServices.html"> Return to Consulting Services </a>
    </body>
    </html>