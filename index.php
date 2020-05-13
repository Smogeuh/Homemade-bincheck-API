<!DOCTYPE html>
<html>
    <head>
        <title>Simple Homemade API Binchecker</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
    <center>
        <form action="index.php" method="POST">
            <input type="text" name="input" />
            <input type="submit" name="submit" />
        </form>
        </br>
<?php

require 'inc/db_conn.php';

if(isset($_POST['submit']) && isset($_POST['input'])){
    if(is_numeric($_POST['input'])){
        if($_POST['input'] >= 6){
            $bin = substr($_POST['input'], 0, 6);
            $rez = $pdo->query("SELECT * FROM bin WHERE bin=" . $bin)->fetch();

            $arrayapi = array("bin" => $rez[1], "bank" => $rez[1], "ctype" => $rez[2], 'clevel' => $rez[3], "country" => $rez[4], "a2code" => $rez[5], "a3code" => $rez[6], "cnumber" => $rez[7], "aci" => $rez[8], "phone" => $rez[9]);

            echo "
            <table border='1px'>
                <tr>
                    <td>Bin</td>
                    <td>" . $rez[0] . "</td>
                </tr>
                <tr>
                    <td>Bank</td>
                    <td>" . $rez[1] ."</td>
                </tr>
                <tr>
                    <td>Credit Card Type</td>
                    <td>" . $rez[2] ."</td>
                </tr>
                <tr>
                    <td>Credit Card Level</td>
                    <td>" . $rez[3] . "</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>" . $rez[4] . "</td>
                </tr>
                <tr>
                    <td>ISO Country A2</td>
                    <td>" . $rez[5] . "</td>
                </tr>
                <tr>
                    <td>ISO Country A3</td>
                    <td>" . $rez[6] . "</td>
                </tr>
                <tr>
                    <td>Card Number</td>
                    <td>" . $rez[7] . "</td>
                </tr>
                <tr>
                    <td>ACI</td>
                    <td>" . $rez[8] . "</td>
                </tr>
                <tr>
                    <td>Issuer / Bank Phone</td>
                    <td>" . $rez[9] . "</td>
                </tr>
            </table>
        </center>
    </body>
</html>";
        }
    }
}

?>