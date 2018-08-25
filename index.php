<?php require_once 'header.php'; ?>
<?php require_once 'buku.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Buku</title>
</head>
<link rel="stylesheet" type="text/css" href="boostrap.min.css">

<body>

<?php $buku = new Buku(); ?>

<h2>Daftar Buku</h2>

<a href="create.php" class="btn btn-primary">Input Buku</a>

<div>&nbsp;</div>


<table class="table table-bordered table-hover">
	<tr>
		<thead>
			<th style="width: 10px">No</th>
			<th>Nama</th>
			<th>Sinopsis</th>
			<th style="width: 300px">&nbsp;</th>
		</thead>
	</tr>
	<?php $no=1; foreach ($buku->findAllBuku() as $data){ ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['sinopsis']; ?></td>
		<td width="200px" style="text-align: center">
			<a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm" ><i class="fa fa-eye"></i> Detail</a>
			<a href="update.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm" ><i class="fa fa-pencil"></i> Update</a>
			<a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i> Hapus</a>
		</td>
	</tr>
	<?php } ?>
</table>	

<?php require_once 'footer.php'; ?>
