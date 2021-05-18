<?php require_once "view.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title><?php echo $titre ; ?></title>
  </head>
  <body >
    <header class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?action=start"><span><img src="view/contenu/img/pngfind.png" style="width:70px; hight:70px;" alt=""> </span>Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

          <ul class="navbar-nav">

            <li class="nav-item dropdown">


                <li><a class="dropdown-item" href="index.php?action=inscreption">signe up</a></li>
                <li><a class="dropdown-item" href="index.php?action=liststors">my stors </a></li>

            </li>


          </ul>
        </div>
      </div>
    </nav>
    </header>

  <!-- contenu  -->
  <div class=""   id="contenu">
    <?php echo $contenu ; ?>
  </div>
      <!-- FIN_contenu  -->


    <footer class="bg-light text-center text-lg-start" style="margin-top:7%;">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="index.php?action=start">BookStoreMVC</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="view/contenu/vendor/jquery/jquery.min.js"></script>
<script src="view/contenu/js/main.js"></script>
  </body>
</html>
