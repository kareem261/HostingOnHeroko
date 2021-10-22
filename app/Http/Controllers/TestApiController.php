<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Service;
use Symfony\Component\Cache\Simple\FilesystemCache;



class TestApiController extends Controller
{
   /* public function __construct(Database $database)
    {
        $this->database = $database;
    }*/

    public function index(Request $request,Database $database){
        
         
        $factory = (new Factory())
        ->withServiceAccount('D:\xampp1\htdocs\myapp\laraveldbtutorial-firebase-adminsdk-amcy9-7c6cb4fca6.json')
        ->withDatabaseUri('https://laraveldbtutorial-default-rtdb.firebaseio.com/');    
           

        $ref_tablename='contacts';
        $postData = [
            'fname' =>  $request->input('fname'),
            'lname' =>  $request->input('lname'),
        ];
        $postRef =$database->getReference($ref_tablename)->push($postData);

        if ($postRef){
          return "the process work";
        }
        else{
            return "not work";
        }
    }
}
