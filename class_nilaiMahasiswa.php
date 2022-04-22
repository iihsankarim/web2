<?php

class nilaiMahasiswa {
	public $matakuliah;
	public $nilai;
	public $nim;

	function __construct($nim,$matkul,$nilai) {
		$this->matakuliah = $matkul;
		$this->nilai = $nilai;
		$this->nim = $nim;
	}
	public function grade() {
		if  ($this->nilai >= 56){
			return "Lulus";
		}
		elseif  ($this->nilai < 56){
			return "Tidak Lulus";
		}
	}
	public function hasil() {
		if ($this->nilai < 35) {
			return "E";
		}
		elseif ($this->nilai >= 36 && $this->nilai <= 55) {
			return "D";
		}
		elseif ($this->nilai >= 56 && $this->nilai <= 69){
			return "C";
		}
		elseif ($this->nilai >= 70 && $this->nilai <= 84){
			return "B";
		}
		elseif ($this->nilai >= 85 && $this->nilai <= 100){
			return "A";
		}
	}
}
?>