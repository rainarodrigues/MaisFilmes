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
				<!-- O Blade utiliza o conceito de seções. Sendo assim, podemos definir o que entrará em cada ponto da página. -->
				<!-- Isso significa que nós teremos um layout contendo uma estrutura, e dentro dessa estrutura teremos partes que serão informadas pelo arquivo que a utilizará. -->
				<h1>@yield('cabecalho')</h1>
			</div>
			@yield('conteudo')
		</div>
	</body>
</html>