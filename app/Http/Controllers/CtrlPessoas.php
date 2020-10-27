<?php

namespace App\Http\Controllers;

use App\Models\Models\Pessoas;
use Illuminate\Http\Request;

class CtrlPessoas extends Controller
   {
    

       protected $pessoas;
 
       public function __construct(Pessoas $pessoas) {
    
       $this->pessoas = $pessoas;
        
       }
       
       public function listPessoas() {

       $pessoas = Pessoas::all();
 
       return view('welcome', ['pessoas' => $pessoas]);
            
       }




   }
