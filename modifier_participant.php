<?php
    include "cnx.php";

    if (isset($_GET["aaa"]) && isset($_GET["bbb"]) && isset($_GET["ccc"]) && isset($_GET["ddd"]) )
    {
        $id=$_GET["id"];
        $nomprenom=$_GET["aaa"];
        $cin= $_GET["bbb"];
        $direction=$_GET["ccc"];
        $entre=$_GET["ddd"];


            $req = mysqli_query ($link," update participants set nom='$nomprenom',  cin='$cin',  direction='$direction',  entreprise='$entre' 
                                        where id='$id' ");

        if ($req){
            header ("location:listparticipants.php");
        }else {
            echo "Echec de mise a jour";
        }
    }else {
        echo "Champs manquant";
    }

    



?>