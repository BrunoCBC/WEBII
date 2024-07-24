<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Eixos</title>
</head>
<body>
    <h1>Tabela de Eixos</h1>
    <hr>
    <a href="{{route('eixo.create')}}">Cadastrar</a>
    <hr>
    <table>
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÂO</th>
            <th>AÇÔES</th>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->descricao}}</td>
                    <td>
                        <a href="{{route('eixo.show', $item->id)}}">Info</a>
                        <a href="{{route('eixo.edit', $item->id)}}">Alterar</a>
                        <a href="">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>