<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Usuario;
use App\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioApiController extends Controller
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
 
    public function store(Request $request){
    	$usuarios = new Usuario;
		$usuarios->nome=$request->get('nome');
        $usuarios->email=$request->get('email');
        $usuarios->telefone=$request->get('telefone');
        $usuarios->placaDoCarro=$request->get('placaDoCarro');
		$usuarios->idAparelho=$request->get('idAparelho');
    	$usuarios->save();
    	return $usuarios;
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
