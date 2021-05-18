<?php

//Entite
class Store{
  //les_attr
  private $name ;
  private $adresse;
  private $email;
  private $tele ;
  private $id_s ;
//contruction
public function __construct($name, $adresse, $email,$tele ,$id_store){

  $this->name = $name;
  $this->adresse = $adresse;
  $this->email =$email;
  $this->tele =$tele;
  $this->id_s=$id_store;

}
//methods get

public function getNameS(){
  return $this->name ;
}

public function getAdresse(){
  return   $this->adresse;
}

public function getEmail(){
  return   $this->email ;
}

public function getTele(){
  return     $this->tele;
}

public function getId_S(){
  return $this->id_s;
}

// public function setID($id_book){
// $this->id=$id_book;
// }



}//finClass



 ?>
