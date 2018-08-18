<?php

require_once "koneksi.php";

/**
 * Object Buku
 */
class Buku extends Koneksi
{
	
	public function findAllBuku()
	{
		$db = parent::getKoneksi();
		$query = $db->prepare('SELECT * FROM buku');
		$query->execute();

		return $query->fetchAll();
	}

	public function findOneBuku($id)
	{
		$db = parent::getKoneksi();
		$query = $db->prepare("SELECT * FROM buku WHERE id = $id");
		$query->execute();

		return $query->fetch();
	}	

	public function hapusBuku($id)
	{
		$db = parent::getKoneksi();
		$query = $db->prepare("DELETE FROM buku WHERE id = $id");
		return $query->execute();
	}

	public function simpanData($nama, $tahun_terbit)
	{
		$db = parent::getKoneksi();
		$query = $db->prepare("INSERT INTO buku (nama,tahun_terbit) VALUES ('$nama',$tahun_terbit);");
		return $query->execute();		
	}

	public function ubahData($nama, $tahun_terbit, $id)
	{
		$db = parent::getKoneksi();
		$query = $db->prepare("UPDATE buku SET nama = '$nama', tahun_terbit = '$tahun_terbit' WHERE id = $id");
		return $query->execute();		
	}	

	public function hello()
	{
		return "hello";
	}

	public function hitung($pertama, $kedua)
	{
		return $pertama + $kedua;
	}
}