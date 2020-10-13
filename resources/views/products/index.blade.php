<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
</head>
<body>	
	<div>
	<table class = 'table'> 
		<thead class = 'thead-dark'>
			<tr>
				<th scope = 'row'>Title</th>
				<th scope = 'col'>Text</th>
				<th scope = 'col'>Short Description</th>
			</tr>
		</thead>
			@foreach ($products as $product)
				<tr>
					<td>{{$product->title}}</td>
					<td>{{$product->text}}</td>
					<td>{{$product->short_description}}</td>
				</tr>
			@endforeach
		</table>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

