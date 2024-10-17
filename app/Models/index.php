<?php

require 'App/Services/helpers.php';

require 'App/Services/Unit.php';
require 'App/Services/Soldier.php';
require 'App/Services/Archer.php';
require 'App/Services/Armor.php';
require 'App/Services/BronzeArmor.php';
require 'App/Services/SilverArmor.php';
require 'App/Services/CursedArmor.php';


$armor = new BronzeArmor();

$ramm = new Soldier('Ramm');

$silence = new Archer('Silence');
//$silence->move('el norte');
$silence->attack($ramm);

$ramm->setArmor(new BronzeArmor);

$silence->attack($ramm);

$ramm->attack($silence);