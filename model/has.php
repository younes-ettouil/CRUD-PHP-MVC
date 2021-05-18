<?php
class Has{
  private $id_book;
  private $id_store;

public function __construct($id_book,$id_store){
    $this->id_book=$id_book;
    $this->id_store=$id_store;

}

public function getId_book(){
  return $this->id_book ;
}

public function getId_store(){
  return $this->id_store ;
}


}


 ?>
