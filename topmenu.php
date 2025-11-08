<?php 
    $isLogged = False;
    $isAdmin = False;

    // // Comprobar si hi ha sesió iniciada
    if(isset($_SESSION['role'])) {
        $isLogged = True;
        // Determinar si és admin
        if ($_SESSION['role'] === 'admin') {
            $isAdmin = True;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>DAWBI-M07-Pt11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet">
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 ps-5 pe-5">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="https://www.proven.cat">
                <img src="images/ip_logo.png" alt="Logo" class="logo-navbar me-2">
            </a>

            <!-- Botó toggle (responsive) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contingut del navbar -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Enllaços de l'esquerra -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Enllaços visibles per a tots -->
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                    <!-- Només admin -->
                    <?php if ($isAdmin): ?>
                        <li class="nav-item"><a class="nav-link" href="adminmenus.php">Admin Menus</a></li>
                        <li class="nav-item"><a class="nav-link" href="adminusers.php">Admin Users</a></li>
                    <?php endif; ?>

                    <!-- Només si SÍ està loggejat -->
                    <?php if ($isLogged): ?>
                        <li class="nav-item"><a class="nav-link" href="daymenu.php">Day Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="viewmenus.php">View Menus</a></li>
                    <?php endif; ?>
                </ul>
                
                <!-- Informació a la dreta -->
                <!-- Botó Login i Register només si NO està loggejat -->
                <?php if (!$isLogged): ?>
                    <div class="d-flex align-items-center text-white">
                        <a class="btn btn-outline-light btn-sm me-2" href="register.php">Register</a>
                        <a class="btn btn-outline-light btn-sm me-2" href="login.php">Login</a>
                    </div>
                <?php endif; ?>

                <!-- Info de l'usuari + botó Logout si està loggejat -->
                <?php if ($isLogged): ?>
                    <div class="d-flex align-items-center text-white">
                        <span class="me-3">
                            <?php 
                            echo htmlspecialchars($_SESSION['name'] . " " . $_SESSION['surname']);
                            ?>
                        </span>
                        <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
