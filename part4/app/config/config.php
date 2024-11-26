<?php

//  APP NAME
define('APPNAME','PHP OPP Project');

//  ROOT URL
define('ROOTURL','http://localhost/phpbatch4/part4');

// APP URL 
// echo __FILE__;  ///var/www/html/phpbatch4/part4/app/config/config.php
// echo dirname(__FILE__); ///var/www/html/phpbatch4/part4/app/config
// echo dirname(dirname(__FILE__)); //var/www/html/phpbatch4/part4/app
define('APPURL',dirname(dirname(__FILE__)));  ///var/www/html/phpbatch4/part4/app

// DB Access
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','Mydbsever#2025');
define('DB_NAME','phpdbsix'); 

echo "I am config";

?>