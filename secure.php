<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

if(!isset($_SESSION['time'])){
    $_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['time']= date("H:i:s");
}
if($_SESSION['ua']!=$_SERVER['HTTP_USER_AGENT']){
 
    die("Wrong browser");
}
  echo $_SESSION['time']; 
    echo $_SESSION['ua']; 


//javascript:(function(){document.cookie='PHPSESSID=5e2sroilm4578mos3q424cmbg2;path=/;';window.location.reload();})()