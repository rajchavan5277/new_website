<?php 

//error_reporting(0);

header("Acces-Control-Allow-Orgin");

$urlVariable = explode("/" , $_SERVER['REQUEST_URI']);
define('URL_VAR_NUM' , 2); //3 on local 2 on production 
date_default_timezone_set('UTC');

// ERROR REPORTING.
error_reporting(E_ERROR | E_WARNING | E_PARSE);


/*define path for css and js */
define('SITE_URL'   ,'http://localhost/new-2_new/');
define('BASE_PATH'  ,'/var/www/html/new-2_new' );
define('ASSEST_URL' , SITE_URL.'public');
define('CSS_PATH'   , SITE_URL.'public/css');
define('JS_PATH'    , SITE_URL.'public/js');
define('IMAGE_PATH' , SITE_URL.'public/images');

/*Database defined variable*/
define('DB_HOST'    , 'localhost');
define('DB_NAME'    ,'NAK_EVENTS_DB');
define('DB_USER'    ,'root');
define('DB_PASSWORD','mysql');

// connection code
//mysqli_connect();
 
if($urlVariable[URL_VAR_NUM]       == 'contact-us'){
   require_once 'contact-us-page.php';
}else if($urlVariable[URL_VAR_NUM] == 'gallary'){
   require_once 'gallery-page.php';
}else if($urlVariable[URL_VAR_NUM] == 'about-us'){
   require_once "about-us-page.php";
}else if($urlVariable[URL_VAR_NUM] == 'services'){
   require_once 'services-page.php';
}else if($urlVariable[URL_VAR_NUM] == 'wedding'){
  require_once 'wedding-page.php';
}else if($urlVariable[URL_VAR_NUM] == '' || $urlVariable[URL_VAR_NUM] == 'home' || $urlVariable[URL_VAR_NUM]== 'index'){ 
   require_once 'home-page.php';
}else{
  echo "Page not found";
}
