<?php

include "cnx.php";




if (isset($_GET["aaa"]) && isset($_GET["bbb"]) && isset($_GET["ccc"]) && isset($_GET["ddd"]) )
{ 

$nomprenom=$_GET["aaa"];
$cin= $_GET["bbb"];
$direction=$_GET["ccc"];
$entre=$_GET["ddd"];



    $req = mysqli_query ($link," insert into participants(nom,cin,direction,entreprise)
     values ('$nomprenom','$cin','$direction','$entre')");

 if ($req){ ?>

<!DOCTYPE  html>
<html lang="fr" >
    <head>
        <title>Liste Participants</title>
        <link rel="stylesheet" href="list_participants.css">

    </head>
<body>
    <h2>Liste des Participants</h2>
    <table>
        <thead>
            <tr>
                <td>N°</td>
                <td>Nom et prénom</td>
                <td>CIN</td>
                <td>Direction / Service</td>
                <td>Entreprise</td>
                <td>Option</td>
            
            </tr>
        </thead>
    <?php
        include "cnx.php";
        $req=mysqli_query ($link,"select * from participants");
        while ($res=mysqli_fetch_array($req)){
    ?>
    <tbody>
        <tr>
            <td> <?php echo $res["id"]; ?> </td>
            <td> <?php echo $res["nom"]; ?> </td>
            <td> <?php echo $res["cin"]; ?> </td>
            <td> <?php echo $res["direction"]; ?> </td>
            <td> <?php echo $res["entreprise"]; ?> </td>
            <td>  
            <form action="detail_participant.php" method="POST">
                <input type="hidden" name="id" value=" <?php echo $res["id"] ; ?> " />
                <input type="submit" value="Modifier" />
            </form> 

            <form action="delete_participant.php" method="POST">
                <input type="hidden" name="id" value=" <?php echo $res["id"] ; ?> " />
                <input type="submit" value="Supprimer" />
            </form>

        </td>
        </tr>
     
    </tbody>
    <?php  } ?>


</body>
</html>


     <?php ;

    
 }else {
    echo "non validé";
 }

}



?>