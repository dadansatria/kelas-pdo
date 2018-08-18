<?php


class Koneksi {

    public function getKoneksi(){
        $host = "localhost";
        $dbname = "perpustakaan";
        $username = "root";
        $password = "";

        $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        return $db;
    }
}

$koneksi = new Koneksi();
$db = $koneksi->getKoneksi();

$query = $db->prepare("SELECT * FROM buku");
$query->execute();

$data = $query->fetchAll();

foreach ($data as $item) {
    echo $item['nama'];
}












