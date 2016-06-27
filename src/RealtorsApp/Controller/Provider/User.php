<?php 
namespace RealtorsApp\Controller\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class User implements ControllerProviderInterface{
    
    public function connect(Application $app){
        
        $users = $app['controllers_factory'];
        
        $users->get('/','RealtorsApp\\Controller\\UserController::index');
        $users->get('/{id}','RealtorsApp\\Controller\\UserController::show');
        $users->get('/edit/{id}','RealtorsApp\\Controller\\UserController::edit');
        $users->post('/','RealtorsApp\\Controller\\UserController::store');
        $users->put('/{id}','RealtorsApp\\Controller\\UserController::update');
        $users->delete('/{id}','RealtorsApp\\Controller\\UserController::destroy');
        
        return $users;
        
    }
}