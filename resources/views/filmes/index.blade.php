@extends('layout')

	@section('cabecalho')
	filmes
	@endsection 
	@section('conteudo')
		<a href="/filmes/criar" class="btn btn-dark mb-2">Adicionar</a>
		<ul class="list-group">
			<!-- Usando o foreach com o php, o jeito comum -->
	    	<!-- <?php foreach ($filmes as $filme): ?>
	    		<li class="list-group-item"><?= $filme; ?></li>
	    	<?php endforeach; ?> -->
	    	<!-- Usando o foreach com o Blade, o jeito mais amigavél -->
	    	@foreach ($filmes as $filme)
	    		<li class="list-group-item"><?= $filme; ?></li>
	    	@endforeach
	    </ul>
	@endsection