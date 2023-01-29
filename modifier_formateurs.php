<?php
    include "cnx.php";

    if (isset($_GET["aaa"]) && isset($_GET["bbb"]) && isset($_GET["ccc"])  )
    {
        $id=$_GET["id"];
        $a=$_GET["aaa"];
        $c= $_GET["bbb"];
        $d=$_GET["ccc"];


            $req = mysqli_query ($link," update formateurs set nom_prenom='$a',  specialite='$c',  direction='$d'   where id='$id' ");

        if ($req){
            header ("location:list_formateur.php");echo "valide";
        }else {
            echo "Echec de mise a jour";
        }
    }else {
        echo "Champs manquant";
    }

    



?>