<?php 
namespace RealtorsApp\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Silex\Application;

class UserController extends BaseController{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(Request $request, Application $app){
        //show the list of users 
        //print_r($app['db']);die('here');
        $offset = !empty($request->request->get('offset'))?$request->request->get('offset'):$this->offset;
        $limit = !empty($request->request->get('limit'))?$request->request->get('limit'):$this->limit;

        $query = "MATCH (p:User) RETURN ID(p) as id,p.name as name,p.email as email,p.type as type,p.phone as phone SKIP {offset} LIMIT {limit}";
        $result = $app['db']()->run($query,['offset'=>intval($offset),'limit'=>intval($limit)]);
        $records = $result->getRecords();
        $data = [];
        foreach($records as $record){
            $data[] = [
                'id'=>$record->value('id'),
                'name'=>$record->value('name'),
                'email'=>$record->value('email'),
                'type'=>$record->value('type'),
                'phone'=>$record->value('phone')
            ];
        }
        
        return new JsonResponse($data);
        
    }
    
    public function show($id,Application $app){
        //show the user #id
        $query = "MATCH (p:User) WHERE ID(p) = {id} RETURN ID(p) as id,p.name as name,p.email as email,p.type as type,p.phone as phone";
        $result = $app['db']()->run($query,['id'=>intval($id)]);
        $record = $result->getRecord();
        if($record){
             return new JsonResponse([
            'id'=>$record->value('id'),
            'name'=>$record->value('name'),
            'email'=>$record->value('email'),
            'type'=>$record->value('type'),
            'phone'=>$record->value('phone')

            ]);
        }
  
        return new JsonResponse([]);
       
        
    }
    
    public function store(){
        //create new user with POST
    }
    
    
    public function edit($id){
        //show edit form #id
        
    }
    
    public function update($id){
        //update user info with PUT
    }
    
    public function destroy($id){
        //delete user with DELETE
    }
}