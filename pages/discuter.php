<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="shortcut icon" href="media/icon.png" type="image/x-icon">
<link rel="stylesheet" href="../css/discuter.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Discussion</title>
</head>
<body>


<nav>              
        <ul>
            <li><a class="active" href="index.php">Blog</a></li>
            
            <li><a href="discuter.php"><span><i class="fas fa-comments"></i> </span > Votre Avis </a></li>
           
        </ul>


        
</nav>






<div class="center"> 


<h1>Votre Avis compte !</h1>

<form action="new.php"   method="POST"  id="usrform">
  Nom: <input type="text" name="nom"  placeholder="Votre nom">
  <input type="submit" value="submit" name="submit">
</form>
<br>
<textarea rows="4" cols="50" name="message" form="usrform" placeholder="entrez votre avis">
</textarea>

<p>laissez nous connaitre votre passion de la musique et aussi des grands musiciens.</p></br>
<p>voici les avis précedents :</p>








<?php  
include('commentaire.php');
include('manager.php');

$manager =new Manager();
$manager->recup();





?>

        
</div>































<script src="files/script.js"></script>
</body>
</html>