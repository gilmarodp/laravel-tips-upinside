<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login Administração</title>
</head>
<body>
	<h1>Login Administração</h1>
	<form action="{{ route('admin.login.do') }}" method="post">
		@csrf
		
		@if($errors->all())
			@foreach($errors->all() as $error)
				<p style="color: red;">{{ $error }}</p>
			@endforeach
		@endif

		<label>Seu E-mail:</label><br>
		<input type="text" name="email" value="gustavo@upinside.com.br"><br><br>

		<label>Sua Senha:</label><br>
		<input type="password" name="password" value=""><br><br>

		<input type="submit" value="Fazer Login">
	</form>
</body>
</html>
