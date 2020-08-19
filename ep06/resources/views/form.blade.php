<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action="{{ route('debug') }}" method="post">
	@csrf
	<label>Título</label>
	<input type="text" name="title">

	<br>

	<label>Sub-título</label>
	<input type="text" name="subtitle">

	<br>

	<label>Conteúdo do Artigo</label>
	<textarea name="content" cols="30" rows="10"></textarea>

	<br>

	<input type="submit" value="Cadastrar Artigo">
</form>

</body>
</html>