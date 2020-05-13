<?php

$pdo = new PDO('mysql:host=;dbname=', "", "");

if(!$pdo){
    die('Problème de connection avec la base de données.');
}

?>