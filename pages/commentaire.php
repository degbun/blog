<?php 

class Commentaire
{
  private $nom;
  private $message;

  public function __construct($nom,$message)
  {
  
    $this->setNom($nom); 
    $this->setMessage($message); 
  }


  public function message() { return $this->message; }
  public function nom() { return $this->nom; }


  public function setNom($nom){$this->nom = $nom;}
  public function setMessage($message){$this->message = $message;}


}





?>