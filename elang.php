<?php 

require_once 'hewan.php';
require_once 'fight.php';



// getInfoHewan(), didalam method ini semua property yang ada di dalam kelas Hewan dan Fight ditampilkan , dan jenis hewan (Elang atau Harimau).

/**
 * 
 */
class elang 
{
	
	public function getInfoHewan(){
		$hewan1 = new hewan;
		$fight1 = new fight;

		$hewan1->nama('elang');



if ($hewan1->get_nama() == 'elang') {
    
    $hewan1->atraksi('elang','terbang tinggi');
	$hewan1->jumlahKaki(2);
	$fight1->attackPower(10);
	$fight1->defencePower(5);


	 $demeg = $hewan1->get_darah() - $fight1->get_attackPower() / $fight1->get_defencePower();

    echo "Nama = ".$hewan1->get_nama()."<br>";

    echo "jumlah Kaki = ".$hewan1->get_jumlahKaki()."<br>";

    echo "Darah = ".$demeg."<br>";
    echo "Defence Power = ".$fight1->get_defencePower()."<br>";
    echo "Attack Power = ".$fight1->get_attackPower()."<br>";



}


	}

}

$elang1 = new elang;

echo $elang1->getInfoHewan();


 ?>