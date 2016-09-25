<?php
include('../include/db.php');
$getCount = $_GET['count'];
$getCount +=1;
// on insère une expérience dans la database
for($i = $getCount; $i <= 5; $i++){
    if(isset($_POST['periode1_'.$i]) && isset($_POST['periode2_'.$i]) && isset($_POST['experience'.$i]) && isset($_POST['ville'.$i])){
    echo $_POST['periode1_'.$i]."<br>";
    echo $_POST['periode2_'.$i]."<br>";
    echo $_POST['experience'.$i]."<br>";
    echo $_POST['ville'.$i]."<br>";
        $periode = array($_POST['periode1_'.$i],$_POST['periode2_'.$i]);
        $var_prefix = 'sqlInsertExperience';
        $var_name = $var_prefix . $i;
        $var_nameBis = 'INSERT INTO experience SET titre = "'.$_POST['experience'.$i].'", periode ="'.$periode[0]." au ".$periode[1].'", ville = "'.$_POST['ville'.$i].'", id_user_fk = ( SELECT id FROM users WHERE pseudo = "'.$_SESSION['pseudo'].'")';
        echo  $var_nameBis."<br>";
        $requestInsert = $pdo->query($var_nameBis); 
    }
    else{
        ?>
        <script>
            alert('stop');
        </script>
        <?php
        
    }
} 
header('Location:../index.php');

?>