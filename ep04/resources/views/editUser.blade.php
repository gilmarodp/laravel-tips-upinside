<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Usuário</title>
</head>
<body>

<form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
	@csrf
	@method('PUT')
	<label>Nome do Usuário:</label>
	<input type="text" name="name" value="{{ $user->name }}">

	<label>E-mail do Usuário:</label>
	<input type="email" name="email" value="{{ $user->email }}">

	<label>Senha do Usuário:</label>
	<input type="password" name="password">

	<input type="submit" value="Editar Usuário">
</form>

</body>
</html>