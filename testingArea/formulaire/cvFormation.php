<?php
include('../include/db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CV de <?php if(isset($_SESSION['pseudo'])){ echo $_SESSION['pseudo'];}else{ header('Location:index.php');} ?></title>
        <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
    </head>
<h2>Formation</h2>&nbsp;&nbsp;<button id="addFormation"> Ajouter une Formation</button><br>

    <form action="actionSQL/actionAddFormation.php" method="post">
            <div id="form1" class="formationDiv">
                <h2><u>Formation 1 :</u></h2><br><br>
                <label>Intitulé de votre Formation :</label><br>
                <input type="text" name="titreForm_1" class="formation"><br>
                <label>Période de votre Formation :</label><br>
                <input type="text" name="periodeForm1_1">&nbsp;au&nbsp;<input type="text" name="periodeForm2_1"><br>
                <label>Ville de votre Formation :</label><br>
                <input type="text" name="villeForm_1"><br>
            </div>
                
                 <div id="form2" class="formationDiv" style="display:none;">
                <h2><u>Formation 2 :</u></h2><br><br>
                <label>Intitulé de votre Formation :</label><br>
                <input type="text" name="titreForm_2" class="formation"><br>
                <label>Période de votre Formation :</label><br>
                <input type="text" name="periodeForm1_2">&nbsp;au&nbsp;<input type="text" name="periodeForm2_2"><br>
                <label>Ville de votre Formation :</label><br>
                <input type="text" name="villeForm_2"><br>
            </div>
                
                <div id="form3" class="formationDiv" style="display:none;">
                <h2><u>Formation 3 :</u></h2><br><br>
                <label>Intitulé de votre Formation :</label><br>
                <input type="text" name="titreForm_3" class="formation"><br>
                <label>Période de votre Formation :</label><br>
                <input type="text" name="periodeForm1_3">&nbsp;au&nbsp;<input type="text" name="periodeForm2_3"><br>
                <label>Ville de votre Formation :</label><br>
                <input type="text" name="villeForm_3"><br>
            </div>
                
                 <div id="form4" class="formationDiv" style="display:none;">
                <h2><u>Formation 4 :</u></h2><br><br>
                <label>Intitulé de votre Formation :</label><br>
                <input type="text" name="titreForm_4" class="formation"><br>
                <label>Période de votre Formation :</label><br>
                <input type="text" name="periodeForm1_4">&nbsp;au&nbsp;<input type="text" name="periodeForm2_4"><br>
                <label>Ville de votre Formation :</label><br>
                <input type="text" name="villeForm_4"><br>
            </div>
                
                 <div id="form5" class="formationDiv" style="display:none;">
                <h2><u>Formation 5 :</u></h2><br><br>
                <label>Intitulé de votre Formation :</label><br>
                <input type="text" name="titreForm_5" class="experience"><br>
                <label>Période de votre Formation :</label><br>
                <input type="text" name="periodeForm1_5">&nbsp;au&nbsp;<input type="text" name="periodeForm2_5"><br>
                <label>Ville de votre Formation :</label><br>
                <input type="text" name="villeForm_5"><br>
            </div>
               
               
                <br><input type="submit" value="Envoyer" id="sendingFormBis">
         </form><br>
         
       
       
       
      
     <script>
            countForm = document.getElementsByClassName('formationDiv').length;
            formBis = document.getElementsByTagName('form')[0];
            k = 1;
           $('#addFormation').click(function(){
                if( k < countForm){
                    k++;
                    $('#form'+k).fadeIn(300);
                }
                else{
                    console.log('stop');
                }
            });
         $('#sendingFormBis').click(function(){
             formBis.action += "?form=" + k;   
             console.log(formBis);
            });
    </script>