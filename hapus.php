<?php 

require_once 'buku.php';

$buku = new Buku();

$id = $_GET['id'];

echo $id;

$buku->hapusBuku($id);

header("Location: index.php");

