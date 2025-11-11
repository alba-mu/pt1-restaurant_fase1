<?php
session_start();
$current_page = 'index.php';
?>

<!-- Barra de navegació -->
<?php include_once "topmenu.php"; ?>

<!-- Contingut de la pàgina -->
<main class="flex-grow-1 container-fluid py-5 text-dark">
  <div class="row align-items-center justify-content-center px-5">

    <!-- Columna esquerra: imatge -->
    <div class="col-lg-6 col-md-10 mb-4 mb-lg-0">
      <img src="images/restaurant.jpg" alt="Restaurant ProvenSoft" class="img-fluid rounded-4 shadow-lg w-100">
    </div>

    <!-- Columna dreta: text de presentació -->
    <div class="col-lg-5 col-md-10">
      <h1 class="fw-bold mb-4">Benvinguts a ProvenSoft Restaurant</h1>
      <p class="lead mb-3">
        A <strong>ProvenSoft Restaurant</strong> combinem la tradició i la innovació per oferir-te una experiència gastronòmica única.
        El nostre equip de cuina elabora plats amb ingredients de proximitat i productes de temporada, cuidant fins al darrer detall.
      </p>
      <p class="mb-4">
        Vine a gaudir d'un ambient acollidor, una atenció personalitzada i una cuina mediterrània que no et deixarà indiferent.
        <em>T'esperem amb il·lusió!</em>
      </p>
      <a href="<?= $isLogged ? 'daymenu.php' : 'login.php' ?>" class="btn btn-dark text-white btn-md mt-2">
        Consulta el menú del dia
      </a>
    </div>

  </div>
</main>

<!-- Footer -->
<?php include_once "footer.php"; ?>

</body>
</html>