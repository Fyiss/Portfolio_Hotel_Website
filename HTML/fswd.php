<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="fswd";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "connection OK";
}
else
{
    echo "Connection Fail".mysqli_connect_error();
}
?>