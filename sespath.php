<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var_dump(session_save_path());

session_save_path('/home/phpstudent/projects/session');

session_start();

var_dump(session_save_path());