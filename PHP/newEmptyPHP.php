<?php
/* 
 * Block comment
 */
require_once(__DIR__ . '/newPHPClass.php');

use Oh\Look\A;

$class = new A\Ns\newPHPClass();

var_dump(
  $class->someBool,
  $class->someInt
);

var_dump(A\Ns\newPHPClass::isStaticBoolTrue());

$value = A\Ns\newPHPClass::$gravity / A\Ns\newPHPClass::PI_ISH;
var_dump($value);

$class->takeSomeArgs('a', 1, $class);

var_dump($class->throws());
