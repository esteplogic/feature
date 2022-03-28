<?php
namespace App\Controller; 
use Cake\Core\Configure;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ContactsController extends AppController
{  
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'order' => [
            'Contacts.id' => 'asc'
        ],
        'fields' => [
            'id', 'first_name', 'last_name' ,'phone_number'
        ],
    ];

    public function index()
    {
        $data = $this->Contacts->find();
        $contacts = $this->paginate($this->Contacts->find());
        return $this->jsonResponse($contacts, 200);
    }

    public function index_ext()
    {
        $contacts = $this->paginate($this->Contacts->find('all',[
            'fields' => array( 'Contacts.id', 'Contacts.first_name', 'Contacts.last_name' ,'Contacts.phone_number', 'Companies.id','Companies.company_name','Companies.phone_number'),
            'contain' => ['Companies'],
            'limit' => 5,
        ]));
        return $this->jsonResponse($contacts, 200);
    }

    public function insert()
    { 
        $this->layout = false;
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) { 
            $data = $this->request->input('json_decode', true);
            $contact = $this->Contacts->patchEntity($contact, $data);      
            if ($this->Contacts->save($contact)) {
                $response = array('status'=>'success','message'=>'Contacts successfully created');
            }else{
                $response = array('status'=>'failed', 'message'=>'Failed to save data');
            }
        }
        return $this->jsonResponse($response, 200); 
    }

    public function jsonResponse($responseData = [], $responseStatusCode = 200) {
        Configure::write('debug', 0);
        $this->response->type('json');
        $this->response->statusCode($responseStatusCode);
        $this->response->body(json_encode($responseData));
        $this->response->send();
        $this->render(false,false);
    }
}