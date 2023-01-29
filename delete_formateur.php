<?php
include "cnx.php";
if (isset($_POST["id"]))
{
     
    $id = $_POST["id"];
    $req=mysqli_query($link,"delete from formateurs where id='$id' ");

    if ($req)
    {
        header("location:list_formateur.php");
    }else{
        echo "Erreur de suppression" ;
    }


}else{
    echo "Champs manquant";
}







?>