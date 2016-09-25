<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/ea284b5c4d.css">
        <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
    </head>
</html>
<?php
include('include/db.php');
if(empty($_SESSION)){
    header('Location:formulaire/logIn.php');
}
$sqlSelect = "SELECT * FROM users";
$requestSelect = $pdo->query($sqlSelect);
$resultSelect = $requestSelect->fetchAll();
$countSelect = count($resultSelect);

$sqlCv = 'SELECT cvCount FROM users WHERE pseudo="'.$_SESSION['pseudo'].'"';
$requestCv = $pdo->query($sqlCv);
$resultCv = $requestCv->fetchAll();
$countCv = count($resultCv);
if(isset($_SESSION['pseudo'])){
    echo '<button id="logOut">Déconnexion</button><br><br>';
//    echo gettype($resultCv[0]['cvCount']);
//    die();
    if($resultCv[0]['cvCount'] === '0'){
        echo '<button id="createCV">Créer un CV</button>';
    }
    else{
        echo ' Vous avez deja creer votre CV'.'<br>';
        echo '<button id="deleteCV"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer le CV</button><br>';
        echo '<button id="updateCV"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier le CV</button>';
    }
}
else{
    echo '<a href="formulaire.php">Inscription Ici</a><br>';
    echo '<a href="logIn.php">Connexion</a><br>';
}

?>


<script>
    $('#deleteCV').click(function(){
        var r = confirm("Voulez-vous vraiment supprimer ce CV ?");
        if (r == true) {
            window.location.href = "actionSQL/deleteCV.php";
        } 
        else{
            window.location.href = "index.php";
        }
    });
    $('#updateCV').click(function(){
        var r = confirm("Accéder a l'interface de modification du CV ?");
        if (r == true) {
            window.location.href = "formulaire/updateCVExperience.php";
        } 
        else{
            window.location.href = "index.php";
        }
    });
    $('#logOut').click(function(){
        var r = confirm("Se déconnecter ?");
        if (r == true) {
            window.location.href = "actionSQL/logOut.php";
        } 
        else{
            window.location.href = "index.php";
        }
    });
    $('#createCV').click(function(){
        var r = confirm("Commencer la création d'un CV ?");
        if (r == true) {
            window.location.href = "formulaire/cvExperience.php";
        } 
        else{
            window.location.href = "index.php";
        }
    });
</script>












