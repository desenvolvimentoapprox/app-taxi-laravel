<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Usuario;
use App\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
{
    //
    public function __construct(){
		//
		$this->middleware('auth');
	}
	
	
    public function index(){
    	return Usuario::all();
    }
    public function create(Request $request){
        
    }
 
    public function store(){
    	
    }
    
    public function show($idUsuarios){
    	
    }
    public function edit($idUsuarios){
    	
    }
    public function update(){
    	
    }
    public function destroy(){
    	
    }

    

}
