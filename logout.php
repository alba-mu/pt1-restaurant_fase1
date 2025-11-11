<?php
session_start();
if (isset($_SESSION['role'])) {  //session exists
    session_destroy();
    $loggedOut = True;
} else {
    header("Location: login.php");
}
?>
<?php if ($loggedOut): ?>
    <!DOCTYPE html>
    <html lang="ca">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tancament de sessió</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body class="bg-dark text-light d-flex flex-column min-vh-100">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-5 pe-5">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="https://www.proven.cat">
                    <img src="images/ip_logo_sense_lletres.png" alt="Logo" class="logo-navbar me-2">
                    <span class="fs-4">ProvenSoft</span>
                </a>
            </div>
        </nav>

        <main class="flex-grow-1 d-flex justify-content-center align-items-center">
            <div class="card text-center p-4 shadow-lg" style="max-width: 400px;">
                <div class="card-body">
                    <h2 class="card-title mb-3">Has tancat sessió correctament</h2>
                    <p class="card-text fs-4 mb-4">Fins aviat!</p>
                    <a href="index.php" class="btn btn-dark text-white w-100">Tornar a la pàgina principal</a>
                </div>
            </div>
        </main>
    </body>

    </html>
<?php endif; ?>