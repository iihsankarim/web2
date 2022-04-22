<?php 
class BMI extends Pasien{
	public $berat;
	public $tinggi;
	public $nilaibmi;

	function __construct($berat, $tinggi) {
		$this->berat = $berat;
		$this->tinggi = $tinggi;
		$this->nilaibmi = $nilaibmi;

	}
	public function nilaiBMI() {
		if (!$this->tinggi || !$this->berat) {
			return ;
		}
		$tinggi = $this->tinggi / 100;
		$nilaibmi = $this->berat / $tinggi **2;
		return number_format($nilaibmi,2);
	}
	public function statusBMI() {
		if (!$this->tinggi || !$this->berat) {
			return ;
		}
		if ($this->nilaiBMI() < 18.5){
			return "Kekurangan berat badan";
		} elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 24.9){
			return "Normal (Ideal) ";
		} elseif ($this->nilaiBMI() >= 25.0 && $this->nilaiBMI() <= 29.9){
			return "Kelebihan berat badan";
		} elseif ($this->nilaiBMI() > 30.0){
			return "Kegemukan (Obesitas)";
		}
	}
}


?>