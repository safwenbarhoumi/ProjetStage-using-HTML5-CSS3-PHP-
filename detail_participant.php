<!DOCTYPE html>
<html>
  <head>
    <title>Participants</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="participant.css">
   </head>
<body>
    <?php

    include "cnx.php";
    if (isset($_POST["id"]))
    {
         $id = $_POST["id"];
        $req=mysqli_query($link,"select * from participants where id='$id' ");
        $res=mysqli_fetch_array($req);
    }else{
        echo "Champs manquant" ;
    }

    ?>

  <div class="wrapper">
        <h2>Participant</h2>
        <form action="modifier_participant.php"  method="GET">
            <input type="hidden" name="id" value=" <?php echo $res["id"] ?>" >
            
            <div class="input-box">
                <input type="text" name="aaa" value=" <?php echo $res["nom"] ?>" placeholder="Nom et Prénom" required>
            </div>
            <div class="input-box">
                <input type="text" name="bbb" value=" <?php echo $res["cin"] ?>" placeholder="N° CIN " required>
            </div>
            <div class="input-box">
                <input type="text" name="ccc" value=" <?php echo $res["direction"] ?>" placeholder="Direction / Service" required>
            </div>
            <div class="input-box">
                <input type="text" name="ddd" value=" <?php echo $res["entreprise"] ?>" placeholder="Entreprise" required>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Modifier" >
            </div>

        </form>
  </div>
</body>
</html>
