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