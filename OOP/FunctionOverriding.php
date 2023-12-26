<?php
require_once './data/Manager.php';

$manager = new Manager();
$manager->name ="BUDI";
$manager->sayHallo('WIN');

$vp = new VicePresident();
$vp->name ="WAWAN";
$vp->sayHallo('WIN');
