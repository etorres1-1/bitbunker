<?php
$linies = file("noticies.txt");

// últimes primer
$linies = array_reverse($linies);

// només 9
$linies = array_slice($linies, 0, 9);
?>

<!DOCTYPE html>
<html lang="ca">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Notícies</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand fw-bold" href="index.html">Vivos Catalunya</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.html">Inici</a>
</li>
<li class="nav-item">
<a class="nav-link" href="bunkers.html">Búnquers</a>
</li>

<li class="nav-item">
<a class="nav-link" href="projecte.html">Projecte</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="botiga.html">Botiga</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="noticies.php">Notícies</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contacte.html">Contacte</a>
</li>

</ul>

</div>
</div>
</nav>

<!-- CONTINGUT -->

<section class="container mt-5 mb-5">

<h1 class="text-center mb-5">Notícies recents</h1>

<div class="row g-4">

<?php foreach($linies as $linia):

$dades = explode("|", trim($linia));
?>

<div class="col-md-4">

<div class="card news-card">

<img src="<?php echo $dades[3]; ?>">

<div class="card-body">

<span class="badge bg-primary mb-2">
<?php echo $dades[2]; ?>
</span>

<h5><?php echo $dades[0]; ?></h5>

<p><?php echo $dades[1]; ?></p>

</div>

</div>

</div>

<?php endforeach; ?>

</div>

</section>

<footer class="text-center mt-5 mb-3">
<p>© 2026 Projecte Vivos xPoint Catalunya</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>