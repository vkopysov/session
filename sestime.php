<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

if(!isset($_SESSION['time'])){
    $_SESSION['time']= date("H:i:s");
}
var_dump($$_SESSION);
echo $_SESSION['time'];