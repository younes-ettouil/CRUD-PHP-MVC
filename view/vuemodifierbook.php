<?php $this->titre = "Edite";?>
<div class="container">
     <div style=" margin-left:20% ;width:50%" class="card">
        <div class="card-header">
         <h3>Edit Book </h3>
        </div>
        <div class="card-footer">
<?php foreach ($onebook as $book) {?>
         <form class="" method="post" action="">
           <div class="mb-3">
             <label class="form-label">Name </label>
             <input class="form-control" type="text" name="name" id="name" value="<?php echo $book->getName(); ?>" >
           </div>
           <div class="mb-3">
             <label class="form-label">Annee </label>
             <input class="form-control" type="text" name="annee" id="annee" value="<?php echo $book->getAnnee(); ?>"  >
          </div>
          <div class="mb-3">
           <label class="form-label">Auteur </label>
           <input class="form-control" type="text" name="auteur" id="auteur" value="<?php echo $book->getAuteur(); ?>" >
          </div>
          <div class="text-end mr-5">
            <input type="submit" class="btn btn-dark" name="submit" value="edit" >
          </div>
        </form>
<?php } ?>
       </div>

     </div>
   </div>
