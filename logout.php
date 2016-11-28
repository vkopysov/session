<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
  $_SESSION['time']= date("H:i:s");
  var_dump($_SESSION);
  $_SESSION = array();
  
  unset($_COOKIE[session_name()]);
  
  var_dump($_SESSION);
  session_destroy();