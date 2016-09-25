<?php
    include('../include/db.php');
    $sqlSelectExperience = 'SELECT * FROM experience WHERE id_user_fk="'.$_SESSION['id'].'"';
    $sqlSelectFormation = 'SELECT * FROM formation WHERE id_user_form_fk="'.$_SESSION['id'].'"';
    $sqlSelectLoisir = 'SELECT * FROM loisir WHERE id_user_loisir_fk="'.$_SESSION['id'].'"';

    $requestExperience = $pdo->query($sqlSelectExperience);
    $requestFormation = $pdo->query($sqlSelectFormation);
    $requestLoisir = $pdo->query($sqlSelectLoisir);

    $resultExperience = $requestExperience->fetchAll();
    $resultFormation = $requestFormation->fetchAll();
    $resultLoisir = $requestLoisir->fetchAll();

    $countExperience = count($resultExperience);
    $countFormation = count($resultFormation);
    $countLoisir = count($resultLoisir);

?>


<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/ea284b5c4d.css">
        <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
        <title>Modifiction du CV de <?=$_SESSION['pseudo'];?></title>
    </head>
    <body>
    <button id="ExperienceUpdate"> Besoin d' ajouter une Experience ?</button><br><br><br>
    <form action="../actionSQL/actionUpdateCVExperience.php" method="post">
       
            <div class="experience" id="experienceUpdate0">
                <label>Experience 1  ID : <input type="hidden" id="ID0" value=<?php if(isset($resultExperience[0]['idExperience'])){ echo $resultExperience[0]['idExperience'];}?>></label>&nbsp;&nbsp;&nbsp;<button id="deleteCV"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br>
                <input type="text" name="titre_1" value="<?php if(isset($resultExperience[0]['titre'])){ echo $resultExperience[0]['titre'];}?>" class="inputExp"><br><br>
                <label>Période 1</label><br>
                <input type="text" name="periode_1" value="<?php if(isset($resultExperience[0]['periode'])){ echo $resultExperience[0]['periode'];}?>"><br><br>
                <label>Ville 1</label><br>
                <input type="text" name="ville_1" value="<?php if(isset($resultExperience[0]['ville'])){ echo $resultExperience[0]['ville'];}?>"><br><br>
            </div><br><br>
            
            <div class="experience" id="experienceUpdate1">
                <label>Experience 2  ID : <input type="hidden" id="ID1" value=<?php if(isset($resultExperience[1]['idExperience'])){ echo $resultExperience[1]['idExperience'];}?>></label>&nbsp;&nbsp;&nbsp;<button id="deleteCV"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br>
                <input type="text"  name="titre_2" value="<?php if(isset($resultExperience[1]['titre'])){ echo $resultExperience[1]['titre'];}?>" class="inputExp"><br><br>
                <label>Période 2</label><br>
                <input type="text" name="periode_2" value="<?php if(isset($resultExperience[1]['periode'])){ echo $resultExperience[1]['periode'];}?>"><br><br>
                <label>Ville 2</label><br>
                <input type="text" name="ville_2" value="<?php if(isset($resultExperience[1]['ville'])){ echo $resultExperience[1]['ville'];}?>"><br><br>
            </div><br><br>
        
            <div class="experience" id="experienceUpdate2">
                <label>Experience 3  ID : <input type="hidden" id="ID2" value=<?php if(isset($resultExperience[2]['idExperience'])){ echo $resultExperience[2]['idExperience'];}?>></label>&nbsp;&nbsp;&nbsp;<button id="deleteCV"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br>
                <input type="text"  name="titre_3" value="<?php if(isset($resultExperience[2]['titre'])){ echo $resultExperience[2]['titre'];}?>" class="inputExp"><br><br>
                <label>Période 3</label><br>
                <input type="text" name="periode_3" value="<?php if(isset($resultExperience[2]['periode'])){ echo $resultExperience[2]['periode'];}?>"><br><br>
                <label>Ville 3</label><br>
                <input type="text" name="ville_3" value="<?php if(isset($resultExperience[2]['ville'])){ echo $resultExperience[2]['ville'];}?>"><br><br>
            </div><br><br>
       
            <div class="experience" id="experienceUpdate3">
                <label>Experience 4  ID : <input type="hidden" id="ID3" value=<?php if(isset($resultExperience[3]['idExperience'])){ echo $resultExperience[3]['idExperience'];}?>></label>&nbsp;&nbsp;&nbsp;<button id="deleteCV"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br>
                <input type="text"  name="titre_4" value="<?php if(isset($resultExperience[3]['titre'])){ echo $resultExperience[3]['titre'];}?>" class="inputExp"><br><br>
                <label>Période 4</label><br>
                <input type="text" name="periode_4" value="<?php if(isset($resultExperience[3]['periode'])){ echo $resultExperience[3]['periode'];}?>"><br><br>
                <label>Ville 4</label><br>
                <input type="text" name="ville_4" value="<?php if(isset($resultExperience[3]['ville'])){ echo $resultExperience[3]['ville'];}?>"><br><br>
            </div><br><br>
        2
            <div class="experience" id="experienceUpdate4">
            <label>Experience 5  ID : <input type="hidden" id="ID4" value=<?php if(isset($resultExperience[4]['idExperience'])){ echo $resultExperience[4]['idExperience'];}?>></label>&nbsp;&nbsp;&nbsp;<button id="deleteCV"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br>
            <input type="text" name="titre_5" value="<?php if(isset($resultExperience[4]['titre'])){ echo $resultExperience[4]['titre'];}?>" class="inputExp"><br><br>
            <label>Période 5</label><br>
            <input type="text" name="periode_5" value="<?php if(isset($resultExperience[4]['periode'])){ echo $resultExperience[4]['periode'];}?>"><br><br>
            <label>Ville 5</label><br>
            <input type="text" name="ville_5" value="<?php if(isset($resultExperience[4]['ville'])){ echo $resultExperience[4]['ville'];}?>"><br><br>
            </div><br><br>
            
            
            <input type="submit" id="updateForm" value="Modifiez le CV">
    </form>
    </body>
    
    <script>
        var formUpdate = document.getElementsByTagName('form')[0];
        var countExp = document.getElementsByClassName('inputExp').length;
        var t = 0
        var get = 0;
        var id = {
            id0 : document.getElementById('ID0').value,
            id1 : document.getElementById('ID1').value,
            id2 : document.getElementById('ID2').value,
            id3 : document.getElementById('ID3').value,
            id4 : document.getElementById('ID4').value,
        };
            console.log(id.id1)
        for(j = 0; j< countExp;j++){
            var divExp = document.getElementById('experienceUpdate'+j)
            var inputExp = document.getElementsByClassName('inputExp')[j].value;
            var inputExpBis = inputExp.length
            console.log(inputExpBis)
            if(inputExp !== ""){
                divExp.style.display = 'block';
                t++;
            }
            else{
                divExp.style.display = 'none';
            }
            get = t;
        }
        $('#updateForm').click(function(){
                    formUpdate.action += "?expUpdate="+t+"&postUpdate0="+id.id0+"&postUpdate1="+id.id1+"&postUpdate2="+id.id2+"&postUpdate3="+id.id3+"&postUpdate4="+id.id4  
            });
        $('#ExperienceUpdate').click(function(){
            window.location.href = "formAddExp.php?exp="+get;
        });
    </script>
    </html>