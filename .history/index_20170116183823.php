<?php 

error_reporting(0);

$urlVariable = explode("/" , $_SERVER['REQUEST_URI']);
define('URL_VAR_NUM' , 2); //3 on local 2 on production 

header("Acces-Control-Allow-Orgin");


date_default_timezone_set('UTC');


// ERROR REPORTING.
error_resporting(E_ALL);


/*define path for css and js */
define('SITE_URL'   ,'http://localhost/new-2_new/');
define('BASE_PATH'  ,'/var/www/html/new-2_new' );
define('ASSEST_URL' , SITE_URL.'public');
define('CSS_PATH'   , SITE_URL.'public/css');
define('JS_PATH'    , SITE_URL.'public/js');
define('IMAGE_PATH' , SITE_URL.'public/images');
define();