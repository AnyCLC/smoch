<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $db = mysqli_connect("localhost", "smochuser", "****"        , "smoch");
  if(!$db)
  {
   exit("Verbindungsfehler: " . mysqli_connect_error());
  }
    if (!mysqli_set_charset($db, "utf8")) {
      echo 'db charset error';
  }