<?php
require_once "book.php";

class BookDAO{
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

//save
public function save($book){

  $req=$this->bdd->prepare('INSERT INTO book(name,auteur,annee) VALUES (:name,:auteur,:annee)');
  $req->execute(array( 'name' => $book->getName(),
  'auteur' => $book->getAuteur(),
  'annee' => $book->getAnnee()
  ));
}//finSave
//modifier
public function modifier($book){
  $id=$_GET['id'];
  $req=$this->bdd->prepare('UPDATE book SET name = :name,auteur = :auteur, annee = :annee WHERE id_book ='.$id);
  $req->execute(array( 'name' => $book->getName(),
  'auteur' => $book->getAuteur(),
  'annee' => $book->getAnnee(),
  ));

}//finModifier
public function supprimer(){
$id=$_GET['id'];
$req=$this->bdd->prepare('DELETE FROM book WHERE id_book ='.$id);
$req->execute();
}

//get_one
public function get_one(){
  $id = $_GET['id'];
  $reponse = $this->bdd->query('SELECT * FROM book WHERE id_book='.$id);
  $oneBook = array();

  while ($donnees = $reponse->fetch()) {

     array_push($oneBook,new Book($donnees['name'], $donnees['auteur'] , $donnees['annee'],$donnees['id_book']));

     }
 return $oneBook;
}


//getall
public function getAll(){

   $reponse = $this->bdd->query('select * from book');
   $arrayBooks = array();

   while ($donnees = $reponse->fetch()) {

      array_push($arrayBooks,new Book($donnees['name'], $donnees['auteur'] , $donnees['annee'],$donnees['id_book']));

      }
 return $arrayBooks;

}//fingetall
public function get_id_book($name ,$auteur,$annee){

  // $auteur=$_POST['auteur'];
  // $annee=$_POST['annee'];
  $reponse = $this->bdd->prepare('SELECT * FROM book WHERE name=:name AND auteur=:auteur AND annee=:annee');
  $reponse->execute(array( 'name' => $name,
  'auteur' => $auteur,
  'annee' => $annee,
  ));

$donnees = $reponse->fetch();
return $donnees['id_book'];
}

}//finClass

 ?>
