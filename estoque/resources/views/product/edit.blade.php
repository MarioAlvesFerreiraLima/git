<html>
	<head>
		<title>Editar Produto</title>

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}

			.titulo {
				background-color: #C0C0C0;
				color: #FFF;

			}

			.ficha {
				background-color: #F5F5DC;
				color: #000000;
			}
		</style>


	</head>
	<body>
		<div class="container">
		  <div class="titulo">
		    <h2>Editar Produtos</h2>
		 	<a href="/products">Listar Produto</a><br>
		  </div>
		  <br>
		  <div class="ficha">	
			  <form method="post" action="/products/update/{{$product->id}}">

			  	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 

			  	Produto : <input type="text" name="name" value="{{$product->name}}"><br>
			   	Cod.Barra : <input type="text" name="codebar" value="{{$product->codebar}}"><br>
			  	<input type="submit" name="Alterar">

			  </form>
          </div>
		</div>
	</body>
</html>