<?php require_once 'header.php'; ?>
<?php require_once 'buku.php'; ?>

<?php 

	require_once 'buku.php';

	$id = $_GET['id'];
	$buku = new Buku();
	$oneBuku = $buku->findOneBuku($id);	

	if (isset($_POST['submit'])) {

		$nama = $_POST['nama'];
		$tahun_terbit = $_POST['tahun_terbit'];

		$buku->ubahData($nama,$tahun_terbit,$id);

		header('Location: index.php');
	}

?>

<form action="create.php" method="post">
	<input type="text" value="<?= $oneBuku['nama']; ?>" name="nama" placeholder="Nama Buku">
	<input type="text" value="<?= $oneBuku['tahun_terbit']; ?>" name="tahun_terbit" placeholder="Tahun Terbit">


	<input type="submit" name="submit">
</form>