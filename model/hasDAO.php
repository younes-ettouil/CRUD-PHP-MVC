<?php
require_once "has.php";
class HasDAO{
  private $bdd;
  private $dbname="gestion_book";
  private $root="root";
  private $pswd="";
public function __construct(){
  try {
    $this->bdd = new PDO('mysql:host=localhost;dbname='.$this->dbname,$this->root,$this->pswd);
  } catch (Exception $e) {
    die('Erreur :'.$e->getMessage());
  }
}

public function savehas($has){

$req = $this->bdd->prepare('INSERT INTO has(id_book,id_bookstore) VALUES(:id_book,:id_store)');
$req->execute(array('id_book' => $has->getId_book(),
                  'id_store' => $has->getId_store()  ));

}
public function supprimer(){
$id=$_GET['id'];
$req=$this->bdd->prepare('DELETE FROM has WHERE id_book ='.$id);
$req->execute();
}


public function mybooks(){
 $ids=$_GET['ids'];
  $reponse = $this->bdd->prepare('SELECT * FROM book natural join has WHERE id_bookstore='.$ids);
  $reponse->execute();
  $oneBook = array();

  while ($donnees = $reponse->fetch()) {
     array_push($oneBook,new Book($donnees['name'], $donnees['auteur'] , $donnees['annee'],$donnees['id_book']));
     }
 return $oneBook;
}




}//FIN_HASDAO
 ?>
