<?php 

require_once "class_bmi.php";
require_once "class_pasien.php";


class BMIpasien {
	public $tgl_periksa;
	public $pasien;
	public $bmi;

	function __construct($tgl_periksa,$pasien,$bmi){
		$this->tgl_periksa = $tgl_periksa;
		$this->pasien = $pasien;
		$this->bmi = $bmi;
	}
}
?>