<?php

$SERVER = 'localhost:8000';
$USER = 'root';
$PASS = 'root';
$DB = 'usuario';

if( $conn = mysqli_connect($SERVER, $USER, $PASS, $DB)) {
    
}else{
    echo 'ERRO!';
}