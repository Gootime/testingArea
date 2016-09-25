<?php
include('../include/db.php');

$countExp = $_GET['exp'];
$limit = 5 - $countExp;
$get = 0;


if($limit ==0){
?>
    <script>
        alert("Vous ne pouvez pas ajouter d' autre experience");
        window.location.href = "../formulaire/updateCVExperience.php"
    </script>
<?php
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>CV de <?php if(isset($_SESSION['pseudo'])){ echo $_SESSION['pseudo'];}else{ header('Location:index.php');} ?></title>
        <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
    </head>
    <body>
      <form action="../actionSQL/actionAddExperienceUpdate.php" method="post">
           <?php
            for($b = $countExp+1; $b <= 5;$b++){
                $expvar = 'experience'.$b;
                $periode = 'periode1_'.$b;
                $periodeBis = 'periode2_'.$b;
                $ville = 'ville'.$b;
                ?>
                <br><br>Experience&nbsp;<?=$b;?> :<br>
                <div id="<?php echo $namevar;?>" class="experienceAdd">
                    <input type="text" name="<?php echo $expvar;?>" placeholder="Intitulé de votre Experience"><br>
                    <input type="text" name="<?php echo $periode;?>" placeholder="Début de votre Expérience">&nbsp;&nbsp;au&nbsp;&nbsp;<input type="text" name="<?php echo $periodeBis;?>" placeholder="Fin de votre Experience"><br>
                    <input type="text" name="<?php echo $ville;?>" placeholder="Ville de votre Experience"><br>
                </div>
            <?php
            }
            ?>
            <br><br><input type="submit" value="Envoyer" id="submitFormAdd">
        </form>
        <script>
            var formTer = document.getElementsByTagName('form')[0];
            var expTer = document.getElementsByClassName('experienceAdd').length;
            var param = 5 - expTer
            $('#submitFormAdd').click(function(){
                formTer.action += '?count='+param;
            })
        </script>
    </body>
</html>