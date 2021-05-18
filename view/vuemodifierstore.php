<?php $this->titre = "signe up"; ?>

<div class="container">
  <div style=" margin-left:20% ;width:50%" class="card">
    <div class="card-header">
      <h3>edit your data </h3>
    </div>
    <div class="card-footer">
      <div class="text-center">
      </div>
      <?php foreach ($onestore as $store) {?>
      <form class="" method="post" action="">
        <div class="mb-3">
          <label class="form-label">Your Name: </label>
          <input class="form-control" type="text" name="name" id="name" value="<?php echo $store->getNameS(); ?>" >
        </div>
        <div class="mb-3">
          <label class="form-label">Your adress: </label>
            <textarea class="form-control"name="adresse" id="adresse" ><?php echo $store->getAdresse(); ?></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">your email: </label>
          <input class="form-control" type="text" name="email" id="email" value="<?php echo $store->getEmail(); ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">your phone number: </label>
          <input class="form-control" type="text" name="telephone" id="telephone" value="<?php echo $store->getTele(); ?>">
        </div>
        <div class="text-center mr-5">
          <input type="submit" class="btn btn-dark" name="submit"value="edit" >
        </div>
      </form>
    <?php } ?>
    </div>
  </div>
</div>
