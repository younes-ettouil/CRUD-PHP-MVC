<?php $this->titre = "signe up"; ?>

<div  class="container">
  <div  style=" margin-left:20% ;width:50%" class="card">
    <div class="card-header">
      <h3>signe up </h3>
    </div>
    <div class="card-footer">
      <div class="text-center">
        <section>
          <img src="contenu/img/book.png" style="width:300px; hight:300px;" alt="">
        </section>
      </div>
      <form class="" method="post" action="">
        <div class="mb-3">
          <label class="form-label">Your Name: </label>
          <input class="form-control" type="text" name="name" id="name" >
        </div>
        <div class="mb-3">
          <label class="form-label">Your adress: </label>
          <textarea class="form-control"name="adresse" id="adresse"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">your email: </label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="mb-3">
          <label class="form-label">your phone number: </label>
          <input class="form-control" type="text" name="telephone" id="telephone">
        </div>
        <div class="text-center mr-5">
          <input type="submit" class="btn btn-dark" name="submit"value="save" >
        </div>
      </form>
    </div>
  </div>
</div>
