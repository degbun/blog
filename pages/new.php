<?php 








if (isset($_POST['submit']))

{


include('commentaire.php');
include('manager.php');




$nom =  htmlspecialchars($_POST['nom']);
$message =  htmlspecialchars($_POST['message']);


$comm1 = new Commentaire($nom,$message);
$manager = new Manager();
$manager->add($comm1);
header('Location:discuter.php');


var_dump($comm1);

}





























?>