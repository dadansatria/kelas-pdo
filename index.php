<?php require_once 'buku.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Buku</title>
</head>
<body>

<?php $buku = new Buku(); ?>

<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Sinopsis</td>
		<td>&nbsp;</td>
	</tr>
	<?php $no=1; foreach ($buku->findAllBuku() as $data){ ?>	
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['sinopsis']; ?></td>
		<td><a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
		<td>hapus.php?id=<?php echo $data['id']; ?></td>
	</tr>
	<?php } ?>
</table>



</body>
</html>