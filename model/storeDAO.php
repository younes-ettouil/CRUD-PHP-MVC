<?php
require_once "store.php";

class StoreDAO{

  private $bdd;
  private $dbname="gestion_book";
  private $root="root";
  private $pswd="";
//constructeur
  public function __construct(){
    try {
      $this->bdd = new PDO('mysql:host=localhost;dbname='.$this->dbname,$this->root,$this->pswd);
    } catch (Exception $e) {
      die('Erreur :'.$e->getMessage());
    }
  }//finConstr

// save // mapping OR
  public function save($bookStore){

    $req = $this->bdd->prepare('INSERT INTO bookstore(name, email, adresse, telephone) VALUES(:name, :email, :adr, :tel)');

    $req->execute(array(
      'name'=> $bookStore->getNameS(),
      'email'=> $bookStore->getEmail(),
      'adr'=> $bookStore->getAdresse(),
      'tel' => $bookStore->getTele()
    ));
  }



  public function supprimer(){
    $id_s=$_GET['id'];
    $reponse  = $this->bdd->prepare('DELETE from bookstore WHERE id_bookstore=:id');
    $reponse->execute(array('id' =>$id_s ));
  }


  public function modifier($Store){
    $id_s=$_GET['ids'];
    $req=$this->bdd->prepare('UPDATE bookstore SET name = :name,email = :email, telephone = :tel, adresse = :adr WHERE id_bookstore=:id');
    $req->execute(array('id' =>$id_s,
    'name'=> $Store->getNameS(),
    'email'=> $Store->getEmail(),
    'adr'=> $Store->getAdresse(),
    'tel' => $Store->getTele()
    ));

  }

  public function get_one_store(){
    $id = $_GET['ids'];
    $reponse = $this->bdd->query('SELECT * FROM bookstore WHERE id_bookstore='.$id);
    $oneBook = array();

    while ($donnees = $reponse->fetch()) {
       array_push($oneBook,new Store($donnees['name'], $donnees['adresse'] , $donnees['email'],$donnees['telephone'],$donnees['id_bookstore']));
       }
   return $oneBook;
  }
  public function getAll(){

    $reponse  = $this->bdd->query('SELECT * from bookstore');
    $arrayStore =  array();
    while ($donnees = $reponse->fetch()) {
        array_push($arrayStore, new Store($donnees['name'], $donnees['adresse'] , $donnees['email'],$donnees['telephone'],$donnees['id_bookstore']));
  }
  return $arrayStore;
  }



}//fin_storeDAO
