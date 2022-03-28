<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class ContactsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'fields' => [
            'id', 'first_name', 'last_name' ,'phone_number'
        ],
        'sortWhitelist' => [
            'id' 
        ]
    ];
    
    // public function index_ext($value='')
    // {
    //     // code...
    // }
}