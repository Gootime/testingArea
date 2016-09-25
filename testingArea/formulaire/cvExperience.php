<?php
include('../include/db.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title>CV de <?php if(isset($_SESSION['pseudo'])){ echo $_SESSION['pseudo'];}else{ header('Location:index.php');} ?></title>
        <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
    </head>
    <body>
        <h2>Expérience</h2>&nbsp;&nbsp;<button id="addExperience"> Ajouter une Expérience</button><br>
         <form action="actionSQL/actionAddExperience.php" method="post">
            <div id="exp1" class="experienceDiv">
                <h2><u>Expérience 1 :</u></h2><br><br>
                <label>Intitulé de votre Expérience :</label><br>
                <input type="text" name="titre_1" class="experience"><br>
                <label>Période de votre Expérience :</label><br>
                <input type="text" name="periode1_1">&nbsp;au&nbsp;<input type="text" name="periode2_1"><br>
                <label>Ville de votre Expérience :</label><br>
                <input type="text" name="ville_1"><br>
            </div>
                
                 <div id="exp2" class="experienceDiv" style="display:none;">
                <h2><u>Expérience 2 :</u></h2><br><br>
                <label>Intitulé de votre Expérience :</label><br>
                <input type="text" name="titre_2" class="experience"><br>
                <label>Période de votre Expérience :</label><br>
                <input type="text" name="periode1_2">&nbsp;au&nbsp;<input type="text" name="periode2_2"><br>
                <label>Ville de votre Expérience :</label><br>
                <input type="text" name="ville_2"><br>
            </div>
                
                <div id="exp3" class="experienceDiv" style="display:none;">
                <h2><u>Expérience 3 :</u></h2><br><br>
                <label>Intitulé de votre Expérience :</label><br>
                <input type="text" name="titre_3" class="experience"><br>
                <label>Période de votre Expérience :</label><br>
                <input type="text" name="periode1_3">&nbsp;au&nbsp;<input type="text" name="periode2_3"><br>
                <label>Ville de votre Expérience :</label><br>
                <input type="text" name="ville_3"><br>
            </div>
                
                 <div id="exp4" class="experienceDiv" style="display:none;">
                <h2><u>Expérience 4 :</u></h2><br><br>
                <label>Intitulé de votre Expérience :</label><br>
                <input type="text" name="titre_4" class="experience"><br>
                <label>Période de votre Expérience :</label><br>
                <input type="text" name="periode1_4">&nbsp;au&nbsp;<input type="text" name="periode2_4"><br>
                <label>Ville de votre Expérience :</label><br>
                <input type="text" name="ville_4"><br>
            </div>
                
                 <div id="exp5" class="experienceDiv" style="display:none;">
                <h2><u>Expérience 5 :</u></h2><br><br>
                <label>Intitulé de votre Expérience :</label><br>
                <input type="text" name="titre_5" class="experience"><br>
                <label>Période de votre Expérience :</label><br>
                <input type="text" name="periode1_5">&nbsp;au&nbsp;<input type="text" name="periode2_5"><br>
                <label>Ville de votre Expérience :</label><br>
                <input type="text" name="ville_5"><br>
            </div>
               <br><input type="submit" value="Envoyer" id="sendingForm">
    
         </form>
       <script>
            countExp = document.getElementsByClassName('experienceDiv').length;
            form = document.getElementsByTagName('form')[0];
            i = 1;
            
            $('#addExperience').click(function(){
                if( i < countExp){
                    i++;
                    $('#exp'+i).fadeIn(300);
                }
                else{
                    console.log('stop');
                }
            });
            $('#sendingForm').click(function(){
                form.action += "?exp="+i;
            });
        </script>  
    </body>
</html>