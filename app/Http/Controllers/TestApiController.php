<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class TestApiController extends Controller
{

    
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function add_contact(Request $request){

        $ref_tablename='contacts';
        $postData = [
            'fname' =>  $request->input('fname'),
            'lname' =>  $request->input('lname'),
        ];
        $postRef =$this->database->getReference($ref_tablename)->push($postData);

        if ($postRef){
          return "the process work";
        }
        else{
            return "not work";
        }
    }
}
