@extends('layout')

	@section('cabecalho')
	filmes
	@endsection 
	@section('conteudo')
	 @if (!empty($mensagem ))
	 <div class="alert alert-success">{{ $mensagem }}</div>
	 @endif
		<a href="{{route('criar_filmes')}}" class="btn btn-dark mb-2">Adicionar</a>
		<ul class="list-group">
			<!-- Usando o foreach com o php, o jeito comum -->
	    	<!-- <?php foreach ($filmes as $filme): ?>
	    		<li class="list-group-item"><?= $filme; ?></li>
	    	<?php endforeach; ?> -->
	    	<!-- Usando o foreach com o Blade, o jeito mais amigavél -->
	    	@foreach ($filmes as $filme)
	    		<li class="list-group-item d-flex justify-content-between aling-items-center">{{$filme->nome}}
	    			<form method="post" action="/filmes/{{$filme->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($filme->nome)}}?')">
	    				@csrf
	    				@method('delete')
	    				<button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
	    			</form>
	    		</li>
	    	@endforeach
	    </ul>
	@endsection