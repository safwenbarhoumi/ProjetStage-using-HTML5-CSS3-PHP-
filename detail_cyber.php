<!DOCTYPE html>
<html>
<head>
    <title>Cycle</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css">

</head>

<body>

    <?php

                include "cnx.php";
                if (isset($_POST["id"]))
                {
                    $id = $_POST["id"];
                    $req=mysqli_query($link,"select * from cyclee where id='$id' ");
                    $res=mysqli_fetch_array($req);
                }else{
                    echo "Champs manquant" ;
                }

    ?>




    <div class="container">
        <header>Cycle</header>

        <form action="modifier_cycle.php" method="GET">

        <input type="hidden" name="id" value=" <?php echo $res["id"] ?>" >

            <div class="form first">   
                <div class="fields">
                    <div class="input-field">
                        <label>Entreprise</label>
                        <input type="text"  name="aaa"  value=" <?php echo $res["entreprise"] ?>" required>
                    </div>

                    <div class="input-field">
                        <label>N° Action</label>
                        <input type="number" name="bbb" value="<?php echo $res["action"] ?>" required>
                    </div>

                    <?php
                if (strpos($res["credit"],"impot Droit de tirage(individuel) Droit de tirage")){  ?>
                        <div class="inp">
                            <input type="checkbox" name="ccc" value="credit d impot"  checked="true">
                            <label>Crédit d'impot</label>
                        </div>
                        <div class="inp">
                        <input type="checkbox" name="xxx" value="droit de tirage(individuel)"  checked="true">
                        <label>Droit de tirage(individuel)</label>
                         </div>
                    
                        <div class="inp">
                        <input type="checkbox" name="yyy" value="droit de tirage(collectif)" checked="true">
                        <label>Droit de tirage(collectif)</label>
                         </div>


                         <?php
                    }else if (strpos($res["credit"],"impot Droit de tirage")){  ?>
                        <div class="inp">
                            <input type="checkbox" name="ccc" value="credit d impot"  checked="true">
                            <label>Crédit d'impot</label>
                        </div>
                        <div class="inp">
                        <input type="checkbox" name="xxx" value="droit de tirage(individuel)"  checked="true">
                        <label>Droit de tirage(individuel)</label>
                         </div>
                    
                        <div class="inp">
                        <input type="checkbox" name="yyy" value="droit de tirage(collectif)" >
                        <label>Droit de tirage(collectif)</label>
                         </div>

                         <?php
                    }else if (strpos($res["credit"],"Droit de tirage(individuel) Droit de tirage(collectif)")){  ?>
                        <div class="inp">
                            <input type="checkbox" name="ccc" value="credit d impot"  >
                            <label>Crédit d'impot</label>
                        </div>
                        <div class="inp">
                        <input type="checkbox" name="xxx" value="droit de tirage(individuel)"  checked="true">
                        <label>Droit de tirage(individuel)</label>
                         </div>
                    
                        <div class="inp">
                        <input type="checkbox" name="yyy" value="droit de tirage(collectif)" checked="true">
                        <label>Droit de tirage(collectif)</label>
                         </div>


                         <?php

                    }else if (strpos($res["credit"],"tirage(individuel) Droit de tirag")  &&  strpos($res["credit"],"impot Droit de tirage")){  ?>
                        <div class="inp">
                            <input type="checkbox" name="ccc" value="credit d impot"  checked="true>
                            <label>Crédit d'impot</label>
                        </div>
                        <div class="inp">
                        <input type="checkbox" name="xxx" value="droit de tirage(individuel)"  ">
                        <label>Droit de tirage(individuel)</label>
                         </div>
                    
                        <div class="inp">
                        <input type="checkbox" name="yyy" value="droit de tirage(collectif)" checked="true">
                        <label>Droit de tirage(collectif)</label>
                         </div>


                    
                    
                    <?php
                }else if (strpos($res["credit"],"imp")){  ?>

                        <div class="inp">
                            <input type="checkbox" name="ccc" value="credit d impot"  checked="true">
                            <label>Crédit d'impot</label>
                        </div>
                        <div class="inp">
                            <input type="checkbox" name="xxx" value="droit de tirage(individuel)"  >
                            <label>Droit de tirage(individuel)</label>
                            </div>
                        <div class="inp">
                            <input type="checkbox" name="yyy" value="droit de tirage(collectif)"  >
                            <label>Droit de tirage(collectif)</label>
                            </div>
                    <?php
                    }else if (strpos($res["credit"],"individuel")){  ?>
                        <div class="inp">
                            <input type="checkbox" name="ccc" value="credit d impot"  >
                            <label>Crédit d'impot</label>
                        </div>
                        <div class="inp">
                        <input type="checkbox" name="xxx" value="droit de tirage(individuel)"  checked="true">
                        <label>Droit de tirage(individuel)</label>
                         </div>
                         <div class="inp">
                        <input type="checkbox" name="yyy" value="droit de tirage(collectif)"  >
                        <label>Droit de tirage(collectif)</label>
                         </div>

                    <?php
                    }else if (strpos($res["credit"],"collectif")) {  ?>
                        <div class="inp">
                            <input type="checkbox" name="ccc" value="credit d impot"  >
                            <label>Crédit d'impot</label>
                        </div>
                        <div class="inp">
                        <input type="checkbox" name="xxx" value="droit de tirage(individuel)"  >
                        <label>Droit de tirage(individuel)</label>
                         </div>
                    
                        <div class="inp">
                        <input type="checkbox" name="yyy" value="droit de tirage(collectif)" checked="true">
                        <label>Droit de tirage(collectif)</label>
                         </div>

                    <?php
                    }else  {  ?>
                        <div class="inp">
                            <input type="checkbox" name="ccc" value="credit d impot"  >
                            <label>Crédit d'impot</label>
                        </div>
                        <div class="inp">
                        <input type="checkbox" name="xxx" value="droit de tirage(individuel)"  >
                        <label>Droit de tirage(individuel)</label>
                         </div>
                    
                        <div class="inp">
                        <input type="checkbox" name="yyy" value="droit de tirage(collectif)" >
                        <label>Droit de tirage(collectif)</label>
                         </div>

                    <?php

                } ?>




                    <div class="input-field">
                        <label>Numéro de salle</label>
                        <input type="number" name="ddd" value="<?php echo $res["salle"] ?>" required>
                    </div>
                    <div class="input-field">
                        <label>Thème de Formation</label>
                        <input type="text" name="eee" value=" <?php echo $res["theme"] ?>" required>
                    </div>

                    <div class="input-field">
                        <label>Mode de formation</label>
                        <input type="text" name="fff" value=" <?php echo $res["mode"] ?>" required>
                    </div>

                    <div class="input-field">
                        <label>Lieu de déroulement</label>
                        <input type="text" name="ggg" value=" <?php echo $res["lieu"] ?>" required>
                    </div>
                
                    <div class="input-field">
                        <label>Gouvernorat</label>
                        <input type="text" name="hhh"  value=" <?php echo $res["gouv"] ?>" required>
                    </div>

                    <div class="inp">
                        <label>Période du </label>
                        <input type="date" name="iii" value="<?php echo $res["periode_du"] ?>" required>
                        <label>Au </label>
                        <input type="date" name="jjj" value="<?php echo $res["periode_au"] ?>" required>
                    </div>

                    <div class="inp">
                        <label>Horaire de  </label>
                        <input type="time" name="kkk" value="<?php echo $res["horaire_de"] ?>" required>
                        <label> à </label>
                        <input type="time" name="lll" value="<?php echo $res["horaire_a"] ?>" required>
                    </div>  
                    <div class="inp">
                        <label>Pause de  </label>
                        <input type="time" name="mmm" value="<?php echo $res["pause_de"] ?>" required>
                        <label> à </label>
                        <input type="time" id="pause2" name="nnn" value="<?php echo $res["pause_a"] ?>" required>
                    </div>

                </div>

                <button class="nextBtn">
                <a href="listform.php" class="button ">Modifier</a>

                    
                </button>
                 
            </div>
        </form>
    </div>

    
</body>
</html>
