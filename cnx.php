<?php
$user="root";
$mdp="";
$bd="projet";
$server="localhost";


$link=mysqli_connect($server,$user,$mdp,$bd);
if ($link)
{
   // echo "connexion établie";
}else{
    die(mysqli_connect_error());
}











?>