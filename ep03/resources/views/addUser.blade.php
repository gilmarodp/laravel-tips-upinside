<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
</head>
<body>

<form action="{{ route('users.store') }}" method="post">
	@csrf
	<label>Nome do Usuário:</label>
	<input type="text" name="name">

	<label>E-mail do Usuário:</label>
	<input type="email" name="email">

	<label>Senha do Usuário:</label>
	<input type="password" name="password">

	<input type="submit" value="Cadastrar Usuário">
</form>

</body>
</html>