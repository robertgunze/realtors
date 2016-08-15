<?php 
namespace RealtorsApp\Controller\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class Post implements ControllerProviderInterface{
    
    public function connect(Application $app){
        
        $posts = $app['controllers_factory'];
        
        $users->get('/','RealtorsApp\\Controller\\PostController::index');
        $users->get('/{id}','RealtorsApp\\Controller\\PostController::show');
        $users->get('/edit/{id}','RealtorsApp\\Controller\\PostController::edit');
        $users->post('/','RealtorsApp\\Controller\\PostController::store');
        $users->put('/{id}','RealtorsApp\\Controller\\PostController::update');
        $users->delete('/{id}','RealtorsApp\\Controller\\PostController::destroy');
        
        return $posts;
        
    }
}