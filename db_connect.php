<?php
$server_name = 'localhost';
$username = 'root';
$password = '';
$database = 'clg_admission_form';

$connection = new mysqli($server_name, $username, $password, $database);

if($connection->connect_error){
    die('Unable to connect '.$connection->connect_error);
}
