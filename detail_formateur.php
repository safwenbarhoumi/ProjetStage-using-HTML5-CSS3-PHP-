<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formateur</title>
        <link rel="stylesheet" href="formateur.css">

    </head>
<body>

        <?php
        include "cnx.php";
            if (isset($_POST["id"]))
            {
                $id = $_POST["id"];
                $req=mysqli_query($link,"select * from formateurs where id='$id' ");
                $res=mysqli_fetch_array($req);
            }else{
                echo "Champs manquant" ;
            }

    ?>



    <form action="modifier_formateurs.php" method="get">
    <div class="container">
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Formateur
                </h2>
            </div>
            
                <div class="card-form">
                <input type="hidden" name="id" value=" <?php echo $res["id"] ?>" >
                    <div class="input">
                        <input type="text" class="input-field" name="aaa" value=" <?php echo $res["nom_prenom"] ?> " placeholder="Nom et Prenom du formateur" required/>
                        
                    </div>
                                <div class="input">
                        <input type="text" class="input-field" name="bbb" value=" <?php echo $res["specialite"] ?> " placeholder="Specialite" required/>
                    </div>
                                <div class="input">
                        <input type="text" class="input-field" name="ccc" value=" <?php echo $res["direction"] ?> " placeholder="Direction" required/>
                    </div>
                    <div class="action">
                        <button class="action-button">Modifier</button>
                    </div>
                </div>
            
        </div>
    </div>
</form>
</body>
</html>
