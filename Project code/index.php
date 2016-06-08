<!--/* 
 * Student Info: Name=Weixiong Yu, ID=9010
 * Subject: CourseNo_HWNo_Summer_2016
 * Author: Patrick
 * Filename: newEmptyPHP.php
 * Date and Time: Feb 13, 2016 2:13:23 PM
 * Project Name: 2016 project
 */-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Customer's Account balance</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <div id="content">
            <h1>Simple Account Balance</h1>
            <?php if (!empty($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } // end if ?>
            <form action="future_value.php" method="post">
                <h2>Calculate Future Value</h2>
                
                <div id="data">
                    <label>Account Number:</label>
                    <input type="text" name="Account Number"
                           value="<?php if (!empty($Account_Number)) {echo $Account_Number;} ?>"/><br />

                    <label>Starting Balance:</label>
                    <input type="text" name="Starting Balance"
                           value="<?php if (!empty($Starting_balance)) {echo $Starting_balance;} ?>"/><br />

                    <label>Total Charge:</label>
                    <input type="text" name="Total Change"
                           value="<?php if (!empty($Total_Charge)) {echo $Total_charge;} ?>"/><br />
                    
                      <label>Total Credit:</label>
                    <input type="text" name="Total Credit"
                           value="<?php if (!empty($Total_Credit)) {echo $Total_credit;} ?>"/><br />
                    
                      <label>Credit Limit:</label>
                    <input type="text" name="Credit Limit"
                           value="<?php if (!empty($Credit_limit)) {echo $Credit_limt;} ?>"/><br />
                    
                      <label>New Balance:</label>
                    <input type="text" name="New Balance"
                           value="<?php if (!empty($New_balance)) {echo $New_balance;} ?>"/><br />
                    
                </div><

                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate"/><br />
                </div>

            </form>
        </div>
    </body>
</html>
