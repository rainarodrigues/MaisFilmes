<?php 
namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;
use App\Http\Requests\FilmesFormRequest;


class FilmesController extends Controller{	

	public function index(Request $request){
		$filmes = filme::query()->orderby('nome')->get();
		$mensagem = $request->session()->get('mensagem');
		
		return view('filmes.index', ['filmes' => $filmes, 'mensagem' => $mensagem]);

		// compact('filme') a maneira de chamar duas variaveis com o mesmo nome
	}
	public function create (){
		return view('filmes.create');

	}
	public function store(FilmesFormRequest $request){
		
		$nome = $request->nome;
		
		$filme = Filme::create($request->all());
		$request->session()->flash('mensagem',
			"O filme {$filme->nome} foi criado com sucesso! "
		);
		return redirect()->route('listar_filmes');
	}
	public function destroy(Request $request){
		filme::destroy($request->id);
		$request->session()
		->flash('mensagem',"Filme removido com sucesso! ");
		return redirect()->route('listar_filmes');
	}
}
