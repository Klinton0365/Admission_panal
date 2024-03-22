<?php
class Mic
{
 public $brand;
 public $color;
 public $usb_port;
 public $model;
 private $light;
 public $price;
 public static $test;

 // public function __call($name, $arguments)
 // {
 //           print("\nCalling: $name\n");
 //           print_r($arguments);
 //           print("\n");
 //           return "Hellow-return";
 // }

 public static function testFunction()
 {
  print("This is the static function, this can be run without object intialization.\n");
 }

 public function __construct($brand)
 {
  print("Constructing object...");
  $this->brand = ucwords($brand);
 }

 public function setLight($light)
 {
  $this->light = $light;
 }

 public function getBrand()
 {
  return $this->brand;
 }

 public function add($a, $b)
 {
  return $a + $b;
 }

 public function getModel()
 {
  return $this->model;
 }
 public function setModel($model)
 {
  $this->model = ucwords($model);
 }

 public function getModelProxy()
 {
  return $this->getModel();
 }

 public function __destruct()
 {
  print("Destruct object...");
 }
}

// class DupMic
// {
//           public static function testFunction()
//           {
//                     return "Hiiiiiiiii";
//           }
// }
