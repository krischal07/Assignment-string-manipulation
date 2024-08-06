<?php 
      $characters = "Gandalf,Aragorn,Legolas";
      $charArr = explode(",", $characters);
      var_dump($charArr);
      // echo strtolower($charArr);
      $newcharArr = implode("*", $charArr);
      echo strtolower($newcharArr);
?>