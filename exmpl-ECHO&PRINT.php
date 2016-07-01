<?php

  //ECHO
  $txt = "W3Schools.com";
  //We can use echo() instead of echo (it's the same)
  echo("Using echo()!<br>");
  echo("I love $txt!<br>");
  echo("I love " . $txt . "!<br>");
  echo("<h3>We can use HTML markup!</h3>");
  echo("<h2>PHP is Fun!</h2>");
  echo "Using echo!<br>";
  $x = 4;
  $y = 3;
  echo "This ", "string ", "was ", "made ", "with ", $x + $y, " multiple parameters.<br>";
  echo $x + $y . "<br>";


  //PRINT
  //We can use print() instead of print (it's the same)
  print("Using print()!<br>");
  print("I love $txt!<br>");
  print("I love " . $txt . "!<br>");
  print("<h3>We can use HTML markup!</h3>");
  print("<h2>PHP is Fun!</h2>");
  print "Using print!<br>";
  //WE CAN'T DO THAT WITH print!!!!!
  //print "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
  print $x + $y - 2;
?>
