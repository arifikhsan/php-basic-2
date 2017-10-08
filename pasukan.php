<?php

/**
 * A simple class : Dragon inside Army
 *
 * I made this just for learning
 *
 * 
 * @author Arif Ikhsanudin <arif.ikhsanudin@apapun.com>
 * @copyright 2017 Iksan Design
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */


class Army {
	public $attack;
	public $damage;
	public $pesan = 'hahaha';
	protected $pesan2 = 'hehehe';
	// private $level = 2;
	public static $level = 2;

	public function hahaha() {
		echo "This is mail from the class Army. <br />";
	}

}

class Dragon extends Army {
	public function apapun() {
		parent::hahaha();
	}

	public function setAttack($attackvalue = 200) {
		$this->attack = $attackvalue;
	}

	public function getAttack() {
		return $this->attack;
	}

	public function setDamage($damagevalue = 1000) {
		$this->damage = $damagevalue;
	}

	public function getDamage() {
		return $this->damage;
	}

	public static function level() {
		return "I call this by using static variable!. The Dragon level is " . self::$level . ".<br />";
	}
}


// Initialize dragon
$obj = new Dragon;
// set dragon attack
$obj->setAttack();

echo "The Dragon can perform attack " . $obj->getAttack() . " Damage.";
echo "<br>";

// set dragon damage
$obj->setDamage();

echo "It can also defends against " . $obj->getDamage() . " Damage.";
echo "<br>";
$obj->apapun();

echo $obj->level();