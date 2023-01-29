<?php

include "cnx.php";



if (isset($_GET["aaa"]) && isset($_GET["bbb"])  &&  isset($_GET["ddd"]) && isset($_GET["eee"]) && isset($_GET["fff"])&& isset($_GET["ggg"]) &&
 isset($_GET["hhh"])&& isset($_GET["iii"]) && isset($_GET["jjj"])&& isset($_GET["kkk"]) && isset($_GET["lll"])&& isset($_GET["mmm"]) && isset($_GET["nnn"])
 || ( isset($_GET["ccc"]) || isset($_GET["xxx"]) || isset($_GET["yyy"])   ))
{ 

$a=$_GET["aaa"];
$b= $_GET["bbb"];
$c=($_GET["ccc"]." ".$_GET["xxx"]." ".$_GET["yyy"]);
$d=$_GET["ddd"];
$e=$_GET["eee"];
$f=$_GET["fff"];
$g=$_GET["ggg"];
$h=$_GET["hhh"];
$i=$_GET["iii"];
$j=$_GET["jjj"];
$k=$_GET["kkk"];
$l=$_GET["lll"];
$m=$_GET["mmm"];
$n=$_GET["nnn"];



    $req = mysqli_query ($link," insert into cyclee(entreprise,action,credit,salle,theme,mode,lieu,gouv,periode_du,periode_au,horaire_de,horaire_a,pause_de,pause_a)
     values ('$a','$b','$c','$d','$f','$g','$h','$h','$i','$j','$k','$l','$m','$n')");

 if ($req){ ?>
    <!DOCTYPE  html>
<html>
    <head>
        <title>Liste Cybers</title>
        <link rel="stylesheet" href="button.css">
        <link rel="stylesheet" href="list_cycle.css">
        <meta charset="UTF-8">


    </head>
<body>
    <div class="container">
    <h1>Liste des Cybers</h1>
    <table>
        <thead>
        <tr>
            <th>N°</th>
            <th>Entreprise</th>
            <th>N° Action</th>
            <th>Crédit / Droit</th>
            <th>Numéro de salle</th>
            <th>Thème de formation</th>
            <th>Mode de formation</th>
            <th>Lieu de déroulement</th>
            <th>Governorat</th>
            <th>Période de</th>
            <th>Période au</th>
            <th>Horaire de </th>
            <th>Horaire à</th>
            <th>Pause de</th>
            <th>Pause à</th>
        </tr>
        </thead>
    <?php
        include "cnx.php";
        $req=mysqli_query ($link,"select * from cyclee");
        while ($res=mysqli_fetch_array($req)){
    ?>
    <tbody>
    <tr>
        <td> <?php echo $res["id"]; ?> </td>
        <td> <?php echo $res["entreprise"]; ?> </td>
        <td> <?php echo $res["action"]; ?> </td>
        <td> <?php echo $res["credit"]; ?> </td>
        <td> <?php echo $res["salle"]; ?> </td>
        <td> <?php echo $res["theme"]; ?> </td>
        <td> <?php echo $res["mode"]; ?> </td>
        <td> <?php echo $res["lieu"]; ?> </td>
        <td> <?php echo $res["gouv"]; ?> </td>
        <td> <?php echo $res["periode_du"]; ?> </td>
        <td> <?php echo $res["periode_au"]; ?> </td>
        <td> <?php echo $res["horaire_de"]; ?> </td>
        <td> <?php echo $res["horaire_a"]; ?> </td>
        <td> <?php echo $res["pause_de"]; ?> </td>
        <td> <?php echo $res["pause_a"]; ?> </td>
        <td id="button">  
            <form action="detail_cyber.php" method="POST">
                <input type="hidden" name="id" value=" <?php echo $res["id"] ; ?> " />
                <div class="a">
                    <input type="submit"  value="Modifier" />
                </div>
            </form> 

            <form action="delete_cycle.php" method="POST">
                <input type="hidden" name="id" value=" <?php echo $res["id"] ; ?> " />
                <div class="a">
                    <input type="submit" value="Supprimer" />
                </div>
            </form>

        </td>
    </tr>
        </tbody>
    <?php  } ?>

        </div>
</body>
</html>
   <?php
 }else {
      echo "non validé";
   }

   }



?>