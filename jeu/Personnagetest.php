<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    include_once './Personnage.php';
    include_once './Soigneur.php';
   
session_start();

if (isset($_SESSION['perso1']) 
        && isset($_SESSION['perso2'])) {

    $perso1 = $_SESSION['perso1'];
    $perso2 = $_SESSION['perso2'];
} else {
    
    $perso1 = new Soigneur(100, 20, 'Perso1', 30);
    $perso2 = new Personnage(140, 15, 'Perso2', 25);
}

if(isset($_POST['attaque'])){
    $perso1->attaquer($perso2);
}


if(isset($_POST['defense'])){
    $perso1->defendre();
}

echo $perso1->genererHTML();
echo $perso2->genererHTML();

$_SESSION['perso1'] =$perso1;
$_SESSION['perso2'] = $perso2;
                             
        ?>
        
        <form method="POST">
    <button name="attaque">Attaquer</button>
    <button name="defense">Défendre</button>
        </form>
    </body>
</html>
