<html>
	<head>
		<title>Contole de Estoque</title>
		
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
			  <h2>Lista de Produtos</h2>
			  <a href="/lots">Lista de Lotes</a><br>
			  <a href="/products/create">Inserir Produto</a><br>
		  </div>
		  <br>
          <div class="ficha">
		      <form method="post" action="/products/search">
			  	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			  	Produto : <input type="text" name="name">

			   	Cod.Barra : <input type="text" name="codebar">
			  	<input type="submit" name="Pesquisar" value="Pesquisar">
		  	  </form>
          </div>
          <br>
          <div class="ficha">
			  <ul>
				  @foreach($products as $list)
				      <ul>{{$list->name}} - <a href="/products/edit/{{$list->id}}">Editar</a>  - <a href="/products/delete/{{$list->id}}">Deletar</a> </ul>
				  @endforeach      
			  </ul>
		 </div>

		</div>
	</body>
</html>