<?php 
namespace RealtorsApp\Controller\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class Transaction implements ControllerProviderInterface{
    
    public function connect(Application $app){
        
        $transactions = $app['controllers_factory'];
        
        $users->get('/','RealtorsApp\\Controller\\TransactionController::index');
        $users->get('/{id}','RealtorsApp\\Controller\\TransactionController::show');
        $users->get('/edit/{id}','RealtorsApp\\Controller\\TransactionController::edit');
        $users->post('/','RealtorsApp\\Controller\\TransactionController::store');
        $users->put('/{id}','RealtorsApp\\Controller\\TransactionController::update');
        $users->delete('/{id}','RealtorsApp\\Controller\\TransactionController::destroy');
        
        return $transactions;
        
    }
}