<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
    		$usuarios=DB::table('users')
			->where('name', 'LIKE', '%'.$query.'%')
            ->where('email', 'LIKE', '%'.$query.'%')
            ->where('telefone', 'LIKE', '%'.$query.'%')
            ->orderBy('id', 'asc')
    		->paginate(7);
    		return view('usuario.index', [
    			"usuarios"=>$usuarios, "searchText"=>$query
    			]);
        }
    }
    public function create(){
    	return view("usuario.create");
    }
}
