<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *
 * 
 */

 //unset($_COOKIE[session_name()]);
//$lifeTime = 0;
 $lifeTime = 7200;
session_set_cookie_params($lifeTime,null,null,false,true);
session_start();