<?php

$db = mysqli_connect("localhost","root","","php");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>