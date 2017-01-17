<?php 

//error_reporting(0);

header("Acces-Control-Allow-Orgin");

$urlVariable = explode("/" , $_SERVER['REQUEST_URI']);
define('URL_VAR_NUM' , 2); //3 on local 2 on production 
print_r($urlVariable[2]);
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

if($urlVariable[URL_VAR_NUM] == 'contact'){
   require_once 'contact.php';
}else if($urlVariable[URL_VAR_NUM] == 'gallary'){
   require_once 'gallery.php';
}else if($urlVariable[URL_VAR_NUM] == 'about-us'){
   require_once "about-us.php";
}else if($urlVariable[URL_VAR_NUM] =='service'){
   require_once 'services.php';
}else if($urlVariable[URL_VAR_NUM] =='wedding'){
  require_once 'wedding.php';
}else if($urlVariable[URL_VAR_NUM] == ''){
   require_once 'home.php';
}else{
//echo "nothing to display";
print_r($urlVariable[URL_VAR_NUM]);

}
