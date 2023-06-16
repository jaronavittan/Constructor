<?php

class Constructor {
    var $callme;
  

    public function __construct() {
      echo "I'm a constructor.";
  }
}

$called = new Constructor();





?>
