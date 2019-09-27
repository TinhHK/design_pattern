<?php
declare(strict_types = 1);
namespace Design_pattern\Singleton;

require 'Singleton.php';

//$single = new Singleton(); // It will cause an error
$single = Singleton::getInstance();
$single::setHiuHiu();
echo $single::getHiuHiu();
$hic = Singleton::getInstance();
echo $hic->getHiuHiu();
$hic->setHiuHiu();
echo $hic->getHiuHiu();
echo $single::getHiuHiu();

