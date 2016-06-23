<?php
require_once __DIR__.'/../vendor/autoload.php';


$app = new Silex\Application();

//set debug flag to true in dev mode
$app['debug'] = true;

$app->run();

$app->get('/api',function(){
    return '{name:"Realtors App",version:"1.0.0"}';
});

//registering routes
require_once __DIR__.'/../app/routes.php';

