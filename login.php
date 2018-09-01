<?php 
	require_once 'header_login.php';
	require_once 'user.php';

	 ?>

<?php if (isset($_POST['input'])){

	$user = new User();

	$user->username = $_POST['username'];
	$user->password = $_POST['password'];

	if ($user->login()) {
		echo "<h1> Masuk ! </h1>";
	} else {
		echo "<h1> Gagal ! $username | $password </h1>";
	}

}
	
 ?>

<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4 ">

		<form action="login.php" method="post">
			<strong>Usename</strong>
			<input type="text" name="username" placeholder="Nama Buku" class="form-control">

			<div>&nbsp;</div>

			<strong>Password</strong>
			<input type="text" name="password" placeholder="Tahun Terbit" class="form-control">

			<div>&nbsp;</div>
			<input type="submit" name="input" class="btn btn-primary">
		</form>

	</div>
</div>
<?php require_once 'footer.php'; ?>