<?php

//array numerik
$buah = ['anggur','apel','jeruk'];
/*print $buah[1];*/

//array asosiatif

$buah = [
	'anggur' => 'Anggur',
	'apel' => 'Apel Malang'
];

/*print $buah['apel'];*/

$buah = [
	'buah' => [
		'anggur' => [
			'merah' => 'Merah'
		],
		'apel' => 'Apel',
	]
];

$buah = [
	'buah' => 'Anggur',
	'apel' => 'Apel',
	'melon' => 'Melon'
];


foreach ($buah as $key => $value) {
	print $value.'<br>';
}

/*print $buah['buah']['anggur']['merah'];*/