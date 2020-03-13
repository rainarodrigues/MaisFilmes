<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Controle de Filmes</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>filmes</h1>
			</div>
			<a href="/filmes/criar" class="btn btn-dark mb-2">Adicionar</a>
			<ul class="list-group">
    			<?php foreach ($filmes as $filme): ?>
    				<li class="list-group-item"><?= $filme; ?></li>
    			<?php endforeach; ?>
    		</ul>
		</div>
	</body>
</html>