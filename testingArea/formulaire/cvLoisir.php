<?php
include('../include/db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CV de <?php if(isset($_SESSION['pseudo'])){ echo $_SESSION['pseudo'];}else{ header('Location:index.php');} ?></title>
        <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
    </head>
<h2>Formation</h2>&nbsp;&nbsp;<button id="addLoisir"> Ajouter un Loisir</button><br>

    <form action="actionSQL/actionAddLoisir.php" method="post">
            <div id="form1" class="loisirDiv">
                <h2><u>Loisir 1 :</u></h2><br><br>
                <label>Intitulé de votre Loisir :</label><br>
                <input type="text" name="titreLoisir_1" class="Loisir"><br>
            </div>
                
                 <div id="form2" class="loisirDiv" style="display:none;">
                <h2><u>Loisir 2 :</u></h2><br><br>
                <label>Intitulé de votre Loisir :</label><br>
                <input type="text" name="titreLoisir_2" class="Loisir"><br>
            </div>
                
                <div id="form3" class="loisirDiv" style="display:none;">
                <h2><u>Loisir 3 :</u></h2><br><br>
                <label>Intitulé de votre Loisir :</label><br>
                <input type="text" name="titreLoisir_3" class="Loisir"><br>
            </div>
                
                 <div id="form4" class="loisirDiv" style="display:none;">
                <h2><u>Loisir 4 :</u></h2><br><br>
                <label>Intitulé de votre Loisir :</label><br>
                <input type="text" name="titreLoisir_4" class="Loisir"><br>Loisir    </div>
                
                 <div id="form5" class="loisirDiv" style="display:none;">
                <h2><u>Loisir 5 :</u></h2><br><br>
                <label>Intitulé de votre Loisir :</label><br>
                <input type="text" name="titreLoisir_5" class="Loisir"><br>
            </div>
               
               
                <br><input type="submit" value="Envoyer" id="sendingFormTer">
         </form><br>
         
       
       
       
      
     <script>
            countFormTer = document.getElementsByClassName('loisirDiv').length;
            formTer = document.getElementsByTagName('form')[0];
            p = 1;
           $('#addLoisir').click(function(){
                if( p < countFormTer){
                    p++;
                    $('#form'+p).fadeIn(300);
                }
                else{
                    console.log('stop');
                }
            });
         $('#sendingFormTer').click(function(){
             formTer.action += "?loisir=" + p;   
             console.log(formBis);
            });
    </script>