<html>
	<head>
		<title>Controle de Lotes</title>
		
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
			  <h2>Lista de Lotes</h2>

			  <a href="/lots/expired">Lotes Vencidos</a>&nbsp;&nbsp;
			  <a href="/lots/stock">Lotes em Estoque</a>&nbsp;&nbsp;
			   <a href="/products">Lista de Produto</a>
	          <br>
		      <a href="/lots/create">Inserir Lotes</a>
		  </div>    
		  <div class="ficha">
			  <ul>
			  	
				  @foreach($lots as $list)
				      <ul>{{$list->name}} - <a href="/lots/edit/{{$list->id}}">Editar</a>  - <a href="/lots/delete/{{$list->id}}">Deletar</a> </ul>
				  @endforeach    
				  
			  </ul>
		  </div>
		</div>
	</body>
</html>