<?php
include "cnx.php";
if (isset($_POST["id"]))
{
     
    $id = $_POST["id"];
    $req=mysqli_query($link,"delete from cyclee where id='$id' ");

    if ($req)
    {
        header("location:listform.php");
    }else{
        echo "Erreur de suppression" ;
    }


}else{
    echo "Champs manquant";
}







?>