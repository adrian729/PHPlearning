<?php
  function myTest() {
      //Using static keyword!
      static $x = 0;
      echo $x . "<br>";
      $x++;
  }

  function myTest2() {
      //Using static keyword!
      static $x = 0;
      echo $x . " 2!<br>";
      $x++;
      $x++;
  }

  myTest();
  myTest();
  myTest();

  myTest2();
  myTest2();
  myTest2();

?>
