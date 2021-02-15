<?php 
include_once 'hewan.php';
include_once 'fight.php';

// getInfoHewan(), didalam method ini semua property yang ada di dalam kelas Hewan dan Fight ditampilkan , dan jenis hewan (Elang atau Harimau).

class harimau
{
	
	public function getInfoHewan(){
		$hewan1 = new hewan;
		$fight1 = new fight;

		$hewan1->nama('harimau');



if ($hewan1->get_nama() == 'harimau') {
    
    $hewan1->atraksi('harimau','Lari Cepat');
	$hewan1->jumlahKaki(4);
	$fight1->attackPower(7);
	$fight1->defencePower(8);

    echo "Nama = ".$hewan1->get_nama()."<br>";

    echo "jumlah Kaki = ".$hewan1->get_jumlahKaki()."<br>";

    echo "Darah = ".$hewan1->get_darah()."<br>";
    echo "Defence Power = ".$fight1->get_defencePower()."<br>";
    echo "Attack Power = ".$fight1->get_attackPower()."<br>";



}


	}

}

$harimau1 = new harimau;

echo $harimau1->getInfoHewan();


 ?>
