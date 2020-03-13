<?php 
namespace App\Http\Controllers;
 	
use Illuminate\Http\Request;

class FilmesController extends Controller{	

	public function index(Request $request){
		// var_dump($request->query() );
		// exit();
		$filmes = [
			'Como eu era antes de você.',
			'Minha mãe é uma perça.',
			'Confições de adolescente'
		];

		return view('filmes.index', ['filmes' => $filmes]);
		// compact('filme') a maneira de chamar duas variaveis com o mesmo nome
	}
	public function create (){
		return view('filmes.create');

	}
}
