<?php
//importer les class de model et view
require_once "model/book.php";
require_once "model/bookDAO.php";
require_once "model/store.php";
require_once "model/storeDAO.php";
require_once "model/has.php";
require_once "model/hasDAO.php";
require_once "view/view.php";

//class ControleurBook
class ControleurBook{
  private $book;
  private $bookDAO;
  private $Store;
  private $StoreDAO;
  private $has;
  private $hasDAO;

//const
  public function __construct(){
    $this->bookDAO = new BookDAO();
    $this->StoreDAO = new StoreDAO();
    $this->hasDAO = new HasDAO();

  }//fin_const
//actions
  public function getAllBooks(){
    $books=$this->bookDAO->getAll();
    $vue =new Vue("listbook");
    $vue->generer(array('listbooks' => $books ));

  }//FIN_getAllBooks

  public function addBook(){
    $vue = new Vue("addbook");

  $suc = "saved succesfully";
    $vue->generer(array());
  if(isset($_POST['submit'])){
    $a = $_POST['name'] ;
    $b = $_POST['auteur'] ;
    $c = $_POST['annee'] ;

    $bookPerson = new Book($_POST["name"], $_POST["auteur"] , $_POST["annee"] ,"");
    $bookPersonDAO = new BookDAO();

    $bookPersonDAO->save($bookPerson);
    //-----------------------------------------------------------
    $id_b = $bookPersonDAO->get_id_book($a, $b , $c);
    $has = new Has($id_b,$_GET['ids']);
    $this->hasDAO->savehas($has);
    $vue = new Vue('ALERT');
    $vue->generer(array('success'=>'saved succesfully please chek your books'));


    }
  }//FIN_addBook
  public function editeBook(){
    $onebook = $this->bookDAO->get_one();
    $vue = new Vue("modifierbook");
    $vue->generer(array('onebook'=>$onebook));
  if(isset($_POST['submit'])){
    $bookPerson = new Book($_POST["name"], $_POST["auteur"] , $_POST["annee"] ,"");
    $bookPersonDAO = new BookDAO();
    $bookPersonDAO->modifier($bookPerson);
    $vue = new Vue('ALERT');
    $vue->generer(array('success'=>'edit succesfully please chek your books'));



    }
  }//FIN_editeBook

public function deletbook(){

  $this->bookDAO->supprimer();

  $books=$this->bookDAO->getAll();
  $vue = new Vue("listbook");
  $vue->generer(array('listbooks' => $books ));

}

public function delfromHas(){
$store = $this->StoreDAO->get_one_store();

$this->hasDAO->supprimer();
$this->bookDAO->supprimer();

$hasbook =$this->hasDAO->mybooks();

$vue = new Vue("mybooks");
$vue->generer(array('onestore'=>$store,'hasbook'=>$hasbook));
}
//----------------------------BOOK_STORE-------------------
public function addstore(){
  $vue =new Vue("inscreption");
  $vue->generer(array());
  if(isset($_POST['submit'])){
    $onestore = new Store($_POST["name"], $_POST["adresse"] , $_POST["email"] ,$_POST["telephone"],"");
    $onestoreDAO = new StoreDAO();
    $onestoreDAO->save($onestore);
    $vue = new Vue('ALERT');
    $vue->generer(array('success'=>'saved succesfully please chek your Stors'));

    }
}
public function getAllStors(){
  $stors=$this->StoreDAO->getAll();
  $vue =new Vue("liststors");
  $vue->generer(array('liststors' => $stors ));
}

public function editStore(){
  $store = $this->StoreDAO->get_one_store();
  $vue = new Vue("modifierstore");
  $vue->generer(array('onestore'=>$store));
if(isset($_POST['submit'])){
  $onestore = new Store($_POST["name"], $_POST["adresse"] , $_POST["email"] ,$_POST["telephone"],"");
  $onestoreDAO = new StoreDAO();
  $onestoreDAO->modifier($onestore);
  $vue = new Vue('ALERT');
  $vue->generer(array('success'=>'edite succesfully please chek your data'));

  }
}//fin_edite

public function deleteStore(){
  $this->StoreDAO->supprimer();
  $stors=$this->StoreDAO->getAll();
  $vue =new Vue("liststors");
  $vue->generer(array('liststors' => $stors ));

}


public function getMyBooks(){
$store = $this->StoreDAO->get_one_store();
$hasbook =$this->hasDAO->mybooks();

$vue = new Vue("mybooks");
$vue->generer(array('onestore'=>$store,'hasbook'=>$hasbook));

}

public function start(){
  $vue = new Vue('start');
  $vue->generer(array());
}

}//FIN_Controleur









 ?>
