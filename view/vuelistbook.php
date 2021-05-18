<?php $this->titre = "Mes Books"; ?>

<div class="container-fluid">
  <table class="table">
  <thead class="thead-dark">
      <tr>
        <th scope="col"><h4>Name</h4> </th>
        <th scope="col"> <h4>Year</h4> </th>
        <th scope="col"><h4>Author</h4> </th>
        <th scope="col"><h4>Edit</h4> </th>
        <th scope="col"><h4>Delete</h4> </th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($listbooks as $book) {?>
    <tr>
      <td> <h5><?php echo $book->getName(); ?> </h5> </td>
      <td>  <h5> <?php echo $book->getAnnee(); ?></h5> </td>
      <td> <h5><?php echo $book->getAuteur(); ?></h5>  </td>
      <td><a href="index.php?action=<?php echo "modifierbook"?>&id=<?php echo $book->getId(); ?>"><button type = "submit" class = "btn btn-info" >Edit</button></a></td>
      <td><a href="index.php?action=<?php echo "suppression"?>&id=<?php echo $book->getId(); ?>"><button type = "submit" class = "btn btn-danger">Delete</button></a></td>
    </tr>
    <?php } ?>
  </tbody>
  </table>
  <div class="text-center">
    <a @onclick="" href="index.php?action=<?php echo "addbook"?>"><button type = "submit" class = "btn btn-light">creat new store </button></a></td>

  </div>
</div>
