<?php 

error_reporting(0);

$urlVariable = explode("/" , $_SERVER['REQUEST_URI']);
define('URL_VAR_NUM' , 2); //3 on local 2 on production 

/*define path for css and js */
define('css');