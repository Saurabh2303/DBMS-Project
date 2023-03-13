<?php
$dbHost='localhost';
$dbName='registration';
$dbUserName='root';
$dbPassword='';

$connect=mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);


if(mysqli_connect_error())
{
    echo"<script> Connection Error ;</script>";
    exit();
}
?>