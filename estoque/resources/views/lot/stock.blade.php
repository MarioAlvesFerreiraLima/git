<html>
	<head>
		<title>Lotes Em Estoque</title>
		
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
			  <h2>Lotes em Estoque</h2>

			  <a href="/lots/expired">Lotes Vencidos</a>&nbsp;&nbsp;
			  <a href="/lots">Lista de Lotes</a>&nbsp;&nbsp;
			  <a href="/products">Lista de Produto</a>
	          <br>
		  
		  </div>    
		  <div class="ficha">
			  <ul>
			  	
				  @foreach($lots as $list)
				      <ul>{{$list->name}}</ul>
				  @endforeach    
				  
			  </ul>
		  </div>
		</div>
	</body>
</html>