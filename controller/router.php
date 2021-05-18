<?php
require_once "controleurbook.php";
require_once "view/view.php";

//class_Router
 class Router{
private $ctrlbook;

//construct
public function __construct(){

  $this->ctrlbook = new ControleurBook();

}//FIN_const
//action_traiter Requet entrant
public function routerRequete(){
try {
  if (isset($_GET['action'])) {
    switch ($_GET['action']) {
      case 'addbook':
        $this->ctrlbook->addBook();
        break;
      case 'listbook':
        $this->ctrlbook->getAllBooks();
        break;
      case 'modifierbook':
        $this->ctrlbook->editeBook();
        break;
      case 'suppression':
        $this->ctrlbook->deletbook();
        break;
      case 'liststors':
          $this->ctrlbook->getAllStors();
          break;
      case 'inscreption':
          $this->ctrlbook->addstore();
          break;
      case 'modifierstore':
          $this->ctrlbook->editStore();
        break;
        case 'suppstore':
            $this->ctrlbook->deleteStore();
          break;
        case 'mybooks':
           $this->ctrlbook->getMyBooks();
          break;
          case 'deletehasbook':
            $this->ctrlbook->delfromHas();
            break;
            case 'start':
              $this->ctrlbook->start();
              break;
      default:
        throw new Exception("Action non valide");
        break;
      }

    }
  } catch (Exception $e) {
  $this->erreur($e->getMessage());
  }
}//FIN_routerReq

private function erreur($msgerreur){
  $vue = new Vue("Erreur");
  $vue->generer(array('msgErreur' => $msgerreur));
  }//fin_erreur

}//FIN_Router

 ?>
