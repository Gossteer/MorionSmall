<?php

'https://code.tutsplus.com/tutorials/roll-your-own-templating-system-in-php--net-16596';
'https://github.com/twigphp/Twig';
'https://www.smarty.net/';
'https://github.com/janl/mustache.js/';
'DIY php template engine';
'https://medium.com/shecodeafrica/building-your-own-custom-php-framework-part-2-c4de74e948a5';

// function load_envato_blog_posts( $site = 'themeforest' ) { 
//     $url = 'http://marketplace.envato.com/api/edge/blog-posts:' . $site . 'json'; 
//     $entries = array(); 
//     $ch = curl_init(); 
//     curl_setopt($ch, CURLOPT_URL, $url); 
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); 
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
//     $ch_data = curl_exec($ch); 
//     curl_close($ch); 
    
//     if(!empty($ch_data)) { 
//     $json_data = json_decode($ch_data, TRUE); 
//     foreach( $json_data['blog-posts'] as $entry ) { 
//         $entries[] = (object) $entry; 
//     } 
//     return $entries; 
//     } 
//     else { 
//         die('Something went wrong with the API request!'); 
//     } 
// }

define("ROOT_DIR", __DIR__ .'\\');

require_once "buildozer/autoload.php"; //автозагрузчик классов
require_once "buildozer/main.php"; //основной класс приложения

$application = new Application();    
$application->run();





