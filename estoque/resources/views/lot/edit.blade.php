<html>
	<head>
		<title>Editar Lote</title>

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
		 <dir class="titulo">
			  <h2>Editar Lote</h2>
			 	<a href="/lots">Listar Lotes</a>
		  </dir>	
          
          <dir class="ficha">
		  <form method="post" action="/lots/update/{{$lot->id}}">

		  	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 

		    Código Lote  : <input type="text" name="name" value="{{$lot->name}}"><br>
	    	Validade até : <input type="date" name="validation" value="{{$lot->validation}}"><br>
	    	Quantidade : <input type="text" name="qty" value="{{$lot->qty}}"><br>
		  	<input type="submit" name="Alterar">


		  </form>
          </dir>
		</div>
	</body>
</html>