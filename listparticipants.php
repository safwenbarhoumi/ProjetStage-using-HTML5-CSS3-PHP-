<!DOCTYPE  html>
<html>
    <head>
        <title>Liste Participants</title>
        <link rel="stylesheet" href="button.css">
        <link rel="stylesheet" href="list_participants.css">
        

    </head>
<body>
    <h2>Liste des Participants</h2>
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom et prénom</th>
                <th>CIN</th>
                <th>Direction / Service</th>
                <th>Entreprise</th>
                <th>Option</th>
            
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
                <div class="a">
                    <input type="submit" value="Modifier" />
                </div>
            </form> 

            <form action="delete_participant.php" method="POST">
                <input type="hidden" name="id" value=" <?php echo $res["id"] ; ?> " />
                <div class="a">
                    <input type="submit" value="Supprimer" />
                </div>
            </form>

        </td>
        </tr>
     
    </tbody>
    <?php  } ?>


</body>
</html>