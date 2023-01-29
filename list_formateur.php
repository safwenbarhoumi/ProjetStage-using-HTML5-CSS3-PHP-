<!DOCTYPE  html>
<html>
    <head>
        <title>Liste des Formateurs</title>
        <link rel="stylesheet" href="button.css">
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
                        <div class="a">
                            <input type="submit" value="Modifier" /> 
                        </div>
                    </form> 

                    <form action="delete_formateur.php" method="POST">
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