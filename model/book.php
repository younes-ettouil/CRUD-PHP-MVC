<?php

//Entite
class Book{
  //les_attr
  private $name ;
  private $auteur;
  private $annee;
  private $id ;
//contruction
public function __construct($name, $auteur, $annee,$id_book){

  $this->name = $name;
  $this->auteur = $auteur;
  $this->annee = $annee;
  $this->id=$id_book;

}
//methods get

public function getName(){
  return $this->name ;
}

public function getAuteur(){
  return $this->auteur ;
}

public function getAnnee(){
  return $this->annee ;
}

public function getId(){
  return $this->id;
}

// public function setID($id_book){
// $this->id=$id_book;
// }



}//finClass



 ?>
