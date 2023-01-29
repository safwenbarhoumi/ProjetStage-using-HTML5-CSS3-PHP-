<?php

include "cnx.php";

echo "debut programme";


if (isset($_GET["aaa"]) && isset($_GET["bbb"]) && isset($_GET["ccc"])  )
{ 

    $nomprenom=$_GET["aaa"];
    $spec= $_GET["bbb"];
    $direction=$_GET["ccc"];



    $req = mysqli_query ($link," insert into formateurs(nom_prenom,specialite,direction)
     values ('$nomprenom','$spec','$direction')");

 if ($req){ ?>
   <!DOCTYPE  html>
   <html lang="fr" >
       <head>
           <title>Liste des Formateurs</title>
           <link rel="stylesheet" href="list_formateur.css">
   
       </head>
   <body>
       <div class="table-wrapper">
       <h2>Liste des Formateurs</h2>
       <table class="fl-table">
           <thead>
           
               <tr>
                   <td>N°</td>
                   <td>Nom et prénom</td>
                   <td>Spécialité</td>
                   <td>Direction</td>
                   <td>Action</td>
               
               </tr>
           </thead>
       <?php
           include "cnx.php";
           $req=mysqli_query ($link,"select * from formateurs");
           while ($res=mysqli_fetch_array($req)){
       ?>
       <tbody>
       <tr>
           <td> <?php echo $res["id"]; ?> </td>
           <td> <?php echo $res["nom_prenom"]; ?> </td>
           <td> <?php echo $res["specialite"]; ?> </td>
           <td> <?php echo $res["direction"]; ?> </td>
               <td>
                   <form action="detail_formateur.php" method="POST">
                           <input type="hidden" name="id" value=" <?php echo $res["id"] ; ?> " />
                           <input type="submit" value="Modifier" />
                       </form> 
   
                       <form action="delete_formateur.php" method="POST">
                           <input type="hidden" name="id" value=" <?php echo $res["id"] ; ?> " />
                           <input type="submit" value="Supprimer" />
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

echo " fin programme";


?>