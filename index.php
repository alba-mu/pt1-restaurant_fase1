<?php
session_start();
$current_page = 'index.php';
include_once "topmenu.php";
?>

<main class="flex-grow-1 container py-5">
  <div class="row align-items-center">
    
    <!-- Columna esquerra: imatge -->
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="images/restaurant.jpg" alt="Restaurant ProvenSoft" class="img-fluid rounded-4 shadow">
    </div>

    <!-- Columna dreta: text de presentació -->
    <div class="col-md-6">
      <h1 class="fw-bold mb-3 text-secondary">Benvinguts a ProvenSoft Restaurant</h1>
      <p class="lead">
        A <strong>ProvenSoft Restaurant</strong> combinem la tradició i la innovació per oferir-te una experiència gastronòmica única.
        El nostre equip de cuina elabora plats amb ingredients de proximitat i productes de temporada, cuidant fins al darrer detall.
      </p>
      <p>
        Vine a gaudir d'un ambient acollidor, una atenció personalitzada i una cuina mediterrània que no et deixarà indiferent.
        <em>T'esperem amb il·lusió!</em>
      </p>
      <a href="<?= $isLogged ? 'daymenu.php' : 'login.php' ?>" class="btn btn-secondary btn-md mt-3">Consulta el menú del dia</a>
    </div>

  </div>
</main>
<?php include_once "footer.php";?>
</body>
</html>