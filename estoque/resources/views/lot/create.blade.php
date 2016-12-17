<html>
	<head>
		<title>Cadastrar Novo Lote</title>


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
		  <div class='titulo'>
			    <h2>Lista de Lotes</h2>
				<a href="/lots">Listar Lotes</a>
			
		   </div>	
		   <br>
		  <div class='ficha'> 	
				  <form method="post" action="/lots/insert">

				  	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 

				  	Código Lote : <input type="text" name="name"><br>
				  	Validade até : <input type="date" name="validation"><br>
				  	Quantidade :  <input type="text" name="qty"><br>

		            Produto : <select name='product_id'> 
					                @foreach($products as $list)
					                   <option value='{{$list->id}}'>{{$list->name}}</option>
					                @endforeach 
		            		  </select>

				  	<input type="submit" name="Cadastrar">

				  </form>
           </div>
		</div>
	</body>
</html>