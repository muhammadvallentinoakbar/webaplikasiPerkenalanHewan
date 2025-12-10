<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Pengenalan Hewan TK</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Pengenalan Hewan</h2>

<a href="filter.php?jenis=Herbivora">Herbivora</a> |
<a href="filter.php?jenis=Karnivora">Karnivora</a> |
<a href="filter.php?jenis=Omnivora">Omnivora</a>

<hr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM tb_hewan");
while ($d = mysqli_fetch_array($data)) {
?>
<div class="card">
    <h3><?= $d['nama'] ?></h3>
    <img src="<?= $d['gambar'] ?>">
    <p><b>Jenis:</b> <?= $d['jenis'] ?></p>
    <p><?= $d['deskripsi'] ?></p>
</div>
<?php } ?>

</div>

</body>
</html>
