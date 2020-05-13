<?php

require 'inc/db_conn.php';

if(isset($_REQUEST['bin'])){
    if(isset($_REQUEST['key'])){

        $apikeys = array('cuneapikey', 'lolmdr', 'jpp');
        if(in_array($_REQUEST['key'], $apikeys)){
            if(is_numeric($_REQUEST['bin'])){
                if(strlen($_REQUEST['bin']) >= 6){

                    $bin = substr($_REQUEST['bin'], 0, 6);
                    $rez = $pdo->query("SELECT * FROM bin WHERE bin=" . $bin)->fetch();
                    $arrayapi = array("bin" => $rez[1], "bank" => $rez[1], "ctype" => $rez[2], 'clevel' => $rez[3], "country" => $rez[4], "a2code" => $rez[5], "a3code" => $rez[6], "cnumber" => $rez[7], "aci" => $rez[8], "phone" => $rez[9]);
                    $json_string = json_encode($arrayapi, JSON_PRETTY_PRINT);
                    echo "<pre>" . $json_string . "</pre>";
                    
                } else{
                    die("Ce n'est pas un bin (short length)");
                }
            } else{
                die("Ce n'est pas un bin (invalid input)");
            }
        } else{
            die("Mauvaise apikey");
        }
    } else {
        die ("Il manque la clé api.");
    }
} else {
    die('Bin non précisé.');
}

?>