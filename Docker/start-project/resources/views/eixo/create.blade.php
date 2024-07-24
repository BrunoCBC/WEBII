<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Eixo</title>
</head>
<body>
    <h1>Novo Eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <form action="{{route('eixo.store')}}" method="POST">
        @csrf
        <input type="text" name="nome"><br>
        <textarea name="descricao" cols="30" rows="6"></textarea><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>