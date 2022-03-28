<?php

try{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$conn = new PDO('mysql:host=109.234.164.194; dbname=rgcm8215_portfolio; charset=utf8', 'rgcm8215_nihad', 'Nino67800.', $pdo_options);
}
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}