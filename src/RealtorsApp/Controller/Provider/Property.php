<?php 
namespace RealtorsApp\Controller\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class Property implements ControllerProviderInterface{
    
    public function connect(Application $app){
        
        $properties = $app['controllers_factory'];
        
        $users->get('/','RealtorsApp\\Controller\\PropertyController::index');
        $users->get('/{id}','RealtorsApp\\Controller\\PropertyController::show');
        $users->get('/edit/{id}','RealtorsApp\\Controller\\PropertyController::edit');
        $users->post('/','RealtorsApp\\Controller\\PropertyController::store');
        $users->put('/{id}','RealtorsApp\\Controller\\PropertyController::update');
        $users->delete('/{id}','RealtorsApp\\Controller\\PropertyController::destroy');
        
        return $properties;
        
    }
}