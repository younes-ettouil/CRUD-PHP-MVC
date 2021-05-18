<?php $this->titre = "Form book"; ?>

<div class="container-fluid">
  <div style=" margin-left:20% ;width:50%" class="card">
    <div class="card-header">
      <h3>Add the Book </h3>
    </div>
    <div class="card-footer">

      <form class="" method="post" action="">
        <div class="mb-3">
          <label class="form-label">Name </label>
          <input class="form-control" type="text" name="name" id="name" >
        </div>
        <div class="mb-3">
          <label class="form-label">Annee </label>
          <input class="form-control" type="text" name="annee" id="annee" >
        </div>
        <div class="mb-3">
          <label class="form-label">Auteur </label>
          <input class="form-control" type="text" name="auteur" id="auteur">
        </div>

        <div class="text-end mr-5">
          <input type="submit" class="btn btn-dark" name="submit"value="save" >
        </div>
      </form>
    </div>
  </div>
</div>
