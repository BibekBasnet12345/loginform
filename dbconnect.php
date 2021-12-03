<?php
$servername="localhost";
$username="root";
$password="";
$db_name="triallogin";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){
    echo "connectionfailed!";
    }
