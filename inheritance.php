<?php

Class Kendaraan {
	public $kecepatan;
	public $jenis;

	public function __construct($speed) {
		$this->kecepatan = $speed;
	}
	
	public function getKecepatan() {
		return $this->get = $kecepatan;
	}

}

class Mobil extends Kendaraan {
	public $brand = 'aa';

	public function __construct() {
		parent::__construct(40);
		echo 'The class "', __CLASS__, '" was initiated!<br />';
	}

	public function getkecepatandarimobil() {
		return $this->kecepatan
	}


}

$toyota = new Mobil;
$toyota->brand;



?>