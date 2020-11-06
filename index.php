<?php 
session_start();
require 'config/Autoload.php';
new Autoload;

require 'config/Routes.php';
new Routes;