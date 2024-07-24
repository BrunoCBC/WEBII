<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais informações - Eixo</title>
</head>
<body>
    <h1>Mais informações - Eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <ul>
        <li><b>ID:</b>{{$eixo->id}}</li>
        <li><b>NOME</b>:</b>{{$eixo->nome}}</li>
        <li><b>DESCRIÇÂO:</b>{{$eixo->descricao}}</li>
        <li><b>CRIADO:</b>{{$eixo->created_at}}</li>
        <li><b>ALTERADO:</b>{{$eixo->updated_at}}</li>
    </ul>
</body>
</html>