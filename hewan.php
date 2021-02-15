<?php 
/**
 * 
 */
class Hewan
{
	
	//Adapun property yang ada di kelas Hewan adalah nama, darah dengan nilai default 50, jumlahKaki, dan keahlian.
	//Method yang ada di dalam kelas Hewan : atraksi(), di dalam method ini akan menampilkan string nama dan keahlian. Contoh "harimau_1 sedang lari cepat" atau "elang_3 sedang terbang tinggi

	//property
	public $nama;
	public $darah = 50;
	public $jumlahKaki;
	public $keahlian;

	
	public function atraksi($nama,$keahlian){
		$this->nama = $nama;
		$this->keahlian = $keahlian;
		

	}
	public function nama($nama){
		$this->nama = $nama;

	}
	public function get_nama(){
		return $this->nama;

	}
	public function get_keahlian(){
		return $this->keahlian;

	}


   public function jumlahKaki($jumlahKaki){
		$this->jumlahKaki = $jumlahKaki;

	}
	public function get_jumlahKaki(){
		return $this->jumlahKaki;

	}

	public function darah($darah){
			$this->darah = $darah;

		}

	public function get_darah(){
		return $this->darah;

	}

  
}

// $hewan1 = new hewan;
// $hewan2 = new hewan;

// $hewan1->atraksi('harimau','lari cepat');


// echo $hewan1->get_nama().' sedang '.$hewan1->get_keahlian().'<br>'; 



 ?>