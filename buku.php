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

	public function hapusBuku($id)
	{
		$db = parent::getKoneksi();
		$query = $db->prepare("DELETE FROM buku WHERE id = $id ");
		return $query->execute();
	}
}


/*$buku = new Buku();
echo $buku->hello('dadan');
*/
