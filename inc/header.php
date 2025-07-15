<?php
include_once __DIR__ . '/config.php'; // caminho mais seguro
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Divinoo!</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= $base ?>css/custom.css">

  <script>
    const baseURL = "<?= $base ?>";
  </script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?= $base ?>index.php">Divinoo!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="<?= $base ?>#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $base ?>#sobre">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $base ?>#planos">Planos</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $base ?>#assinar">Assinar</a></li>
      </ul>
    </div>
  </div>
</nav>
