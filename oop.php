<?php 
/**
 * 
 */
class Pesawat 
{
	
	public function terbang()
	{
		return "tinggi sekali";
	}

	public function takeOff()
	{
		return "jangan kecelakaan";
	}
}


$pesawat =new Pesawat();

print $pesawat->terbang();