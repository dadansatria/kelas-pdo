<?php 

	require_once 'buku.php';

	if (isset($_POST['submit'])) {
		$buku = new Buku();

		$nama = $_POST['nama'];
		$tahun_terbit = $_POST['tahun_terbit'];

		$buku->simpanData($nama,$tahun_terbit);

		header('Location: index.php');
	}

?>

<form action="create.php" method="post">
	<input type="text" name="nama" placeholder="Nama Buku">
	<input type="text" name="tahun_terbit" placeholder="Tahun Terbit">


	<input type="submit" name="submit">
</form>