<?php 

//error_reporting(0);

header("Acces-Control-Allow-Orgin");

$urlVariable = explode("/" , $_SERVER['REQUEST_URI']);
define('URL_VAR_NUM' , $urlVariable[3]); //3 on local 2 on production 

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

if($urlVariable[3] == 'contact'){
   require_once 'contact.php';
}else if($urlVariable[3] == 'gallary'){
   require_once 'gallery.php';
}else if($urlVariable[3] == 'about-us'){
   require_once "about-us.php";
}else if($urlVariable[3] =='service'){
   require_once 'services.php';
}else if($urlVariable[3] == ''){

}else{
   require_once 'home.php';
}
