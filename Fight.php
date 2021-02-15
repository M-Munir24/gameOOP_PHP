<?php 

include_once 'hewan.php';

/**
 * 
 */
//Sedangkan property yang ada di kelas Fight adalah attackPower, defencePower.

// 	Method yang ada di dalam kelas Fight

// serang() , di dalam method ini akan menampilkan string sebagai contoh berikut. Contoh : "harimau_1 sedang menyerang elang_3" atau "elang_3 sedang menyerang harimau_2".
// diserang(), di dalam method ini akan menampilkan string sebagai contoh berikut. Contoh : "harimau_1 sedang diserang" atau "elang_3 sedang diserang", kemudian hewan yang diserang akan berkurang darahnya dengan rumus :
// "darah sekarang - attackPower penyerang / defencePower yang diserang"
// Ketika Elang diinstansiasi, maka jumlahKaki bernilai 2, dan keahlian bernilai "terbang tinggi", attackPower = 10 , deffencePower = 5 ;

// Ketika Harimau diintansiasi, maka jumlahKaki bernilai 4, dan keahlian bernilai "lari cepat" , attackPower = 7 , deffencePower = 8 ;

class Fight 
{

	// property
	public $attackPower;
	public $defencePower;

	public function serang(){
		//harimau_1 sedang menyerang elang_3

		return 'sedang menyerang elang';

	}

	public function diserang(){
		//harimau_1 sedang diserang
		return 'sedang diserang';

	}

	public function attackPower($attackPower){
		$this->attackPower = $attackPower;
	}
	public function get_attackPower(){
		return $this->attackPower;
	}

	public function defencePower($defencePower){
		$this->defencePower = $defencePower;
	}
	public function get_defencePower(){
		return $this->defencePower;
	}

}


$hewan1 = new hewan;
$hewan2 = new hewan;
$fight1 = new fight;

//$hewan1->atraksi('harimau','lari cepat');
//$hewan2->set_atraksi('Elang');

//echo $hewan1->get_nama().' sedang '.$hewan1->get_keahlian().'<br>'; 
//echo $hewan2->get_atraksi();
//echo $hewan1->get_nama().' '.$fight1->serang().'<br>';
//echo $hewan1->get_nama().' '.$fight1->diserang().'<br>';

$hewan1 = new hewan;
		$fight1 = new fight;

		$hewan1->nama($_GET["nama"]);



if ($hewan1->get_nama() == 'elang') {
    
    $hewan1->atraksi('elang','terbang tinggi');
	$hewan1->jumlahKaki(2);
	$fight1->attackPower(10);
	$fight1->defencePower(5);


	 $demeg = $hewan1->get_darah() - $fight1->get_attackPower() / $fight1->get_defencePower();
    
    echo "Nama = ".$hewan1->get_nama()."<br>";

	 
	 echo $hewan1->get_nama().' sedang '.$hewan1->get_keahlian().'<br>'; 
	 echo $hewan1->get_nama().' '.$fight1->diserang().'<br>';

    echo "jumlah Kaki = ".$hewan1->get_jumlahKaki()."<br>";

    echo "Darah = ".$demeg."<br>";
    echo "Defence Power = ".$fight1->get_defencePower()."<br>";
    echo "Attack Power = ".$fight1->get_attackPower()."<br>";



}elseif ($hewan1->get_nama() == 'harimau') {
    
    $hewan1->atraksi('harimau','Lari Cepat');
	$hewan1->jumlahKaki(4);
	$fight1->attackPower(7);
	$fight1->defencePower(8);



	 $demeg = $hewan1->get_darah() - $fight1->get_attackPower() / $fight1->get_defencePower();
	 
	 echo "Nama = ".$hewan1->get_nama()."<br>";

	 echo $hewan1->get_nama().' '.$fight1->serang().'<br>';

	 echo $hewan1->get_nama().' sedang '.$hewan1->get_keahlian().'<br>'; 

    echo "jumlah Kaki = ".$hewan1->get_jumlahKaki()."<br>";

    echo "Darah = ".$demeg."<br>";
    echo "Defence Power = ".$fight1->get_defencePower()."<br>";
    echo "Attack Power = ".$fight1->get_attackPower()."<br>";



}

 ?>