<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\Userservices;
use DB;
//use App\Models\User;

Class UserController extends Controller {

use ApiResponser;
public $userservice;
private $request;
public function __construct(Request $request){
$this->request = $request;
}

    public function getUser(){ //LISTUSER - list all user data
        $users = DB::connection('mysql')
        ->select("Select * from tbl_user");
        return $this->successResponse($users);
    }


    public function getID($id){ //GETID - get using with id
        
    }


    public function addUser(Request $request ){ //ADDUSER - shows one user data
        
    }


    public function updateUser(Request $request,$id){ //UPDATEUSER - updates the user
        
    }

    
    public function deleteUser($id){ //DELETUSER - delete existing user
        
    }
}