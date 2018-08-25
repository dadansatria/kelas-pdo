<?php 

	require_once 'buku.php';

	$id = $_GET['id'];
	$buku = new Buku();
	$oneBuku = $buku->findOneBuku($id);	
?>

	<a href="hapus.php?id=<?= $oneBuku['id']; ?>">Hapus</a>
	<a href="update.php?id=<?= $oneBuku['id']; ?>">Update</a>

	<div>&nbsp;</div>

<table>
	<tr>
		<td width="10%">Nama Buku</td>
		<td width="1%">:</td>
		<td><?= $oneBuku['nama']; ?></td>
	</tr>
	<tr>
		<td>Tahun Terbit</td>
		<td>:</td>
		<td><?= $oneBuku['tahun_terbit']; ?></td>
	</tr>	
	<tr>
		<td>Penulis</td>
		<td>:</td>
		<td><?= $oneBuku['id_penulis']; ?></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td>:</td>
		<td><?= $oneBuku['id_penerbit']; ?></td>
	</tr>
	<tr>
		<td>Sinopsis</td>
		<td>:</td>
		<td><?= $oneBuku['sinopsis']; ?></td>
	</tr>	
</table>

