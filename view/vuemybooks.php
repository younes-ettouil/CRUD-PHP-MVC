<?php $this->titre = "Mes Books"; ?>

<div class="container-fluid">
<?php foreach ($onestore as $store) {?>
<div class=" card text-center">
  <h2> this books for store : <?php echo $store->getNameS(); ?> <br> <br> welcome <?php echo $store->getNameS(); ?> </h2>
</div>
<?php } ?>
  <table class="table">
  <thead class="thead-dark">
      <tr>
        <th scope="col"><h4>Name</h4> </th>
        <th scope="col"><h4>Year</h4></th>
        <th scope="col"><h4>Author</h4></th>
        <th scope="col"><h4>Edit</h4></th>
        <th scope="col"><h4>Delete</h4></th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($hasbook as $hasb) {?>
    <tr >
      <td> <h5><?php echo $hasb->getName(); ?></h5> </td>
      <td> <h5><?php echo $hasb->getAnnee(); ?></h5> </td>
      <td> <h5><?php echo $hasb->getAuteur(); ?></h5>  </td>
      <td><a href="index.php?action=<?php echo "modifierbook"?>&id=<?php echo $hasb->getId(); ?>"><button type = "submit" class = "btn btn-info" ><h5>Edit</h5> </button></a></td>
<?php foreach ($onestore as $store) {?>
      <td><a href="index.php?action=<?php echo "deletehasbook"?>&id=<?php echo $hasb->getId(); ?>&ids=<?php echo $store->getId_S(); ?>"><button type = "submit" class = "btn btn-danger"><h5>Delete</h5> </button></a></td>
<?php } ?>
    </tr>
    <?php } ?>
  </tbody>
  </table>
  <?php foreach ($onestore as $store) {?>
    <div class="">
      <a @onclick="" href="index.php?action=liststors"><button type = "submit" class = "btn btn-light"><h3>back </h3> </button></a></td>

    </div>
  <div class="text-center">
    <a @onclick="" href="index.php?action=<?php echo "addbook"?>&ids=<?php echo $store->getId_S(); ?>"><button type = "submit" class = "btn btn-light"><h3>add one Book</h3> </button></a></td>
  </div>
<?php } ?>
</div>
