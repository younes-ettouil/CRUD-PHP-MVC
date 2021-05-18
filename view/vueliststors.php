<?php $this->titre='book store' ?>
<div class="container-fluid">


<div class="text-center">
  <h3>BookStors :</h3>
  </div>

    <table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col"><h5>Name</h5> </th>
          <th scope="col"><h5>address</h5> </th>
          <th scope="col"><h5>address Email</h5> </th>
          <th scope="col"><h5>phone number</h5> </th>
          <th scope="col"></th>
          <th scope="col"><h5>actions</h5> </th>
          <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
      <?php foreach ($liststors as $store) {?>
      <tr>
        <td> <h4><?php echo $store->getNameS(); ?></h4> </td>
        <td> <h4><?php echo $store->getAdresse(); ?></h4> </td>
        <td> <h4><?php echo $store->getEmail(); ?></h4>  </td>
        <td> <h4><?php echo $store->getTele(); ?> </h4> </td>
        <td><a  href="index.php?action=<?php echo "mybooks"?>&ids=<?php echo $store->getId_S(); ?>"><button type = "submit" class = "btn btn-success" ><h4>show books</h4> </button></a></td>
        <td><a  href="index.php?action=<?php echo "modifierstore"?>&ids=<?php echo $store->getId_S(); ?>"><button type = "submit" class = "btn btn-info" ><h4>Edit</h4> </button></a></td>
        <td><a @onclick="" href="index.php?action=<?php echo "suppstore"?>&id=<?php echo $store->getId_S(); ?>"><button type = "submit" class = "btn btn-danger"><h4>Delete</h4> </button></a></td>
      </tr>
      <?php } ?>
    </tbody>
    </table>


<div class="text-center">
  <a @onclick="" href="index.php?action=<?php echo "inscreption"?>"><button type = "submit" class = "btn btn-light"><h3>creat new store </h3> </button></a></td>

</div>

</div>
