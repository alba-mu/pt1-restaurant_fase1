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

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body class="bg-dark text-light d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center p-4 shadow-lg" style="max-width: 400px;">
            <div class="card-body">
                <h2 class="card-title mb-3">Has tancat sessió correctament</h2>
                <p class="card-text display-6 mb-4">Fins aviat!</p>
                <a href="index.php" class="btn btn-dark text-white w-100">Tornar a la pàgina principal</a>
            </div>
        </div>
    </body>

    </html>
<?php endif; ?>