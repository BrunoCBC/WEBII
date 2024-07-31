@extends('templates.main', ["titulo" => "Tabela de Eixos", "header" => "Tabela de Eixos"])

@section('content')
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
                        <form action="{{route('eixo.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Deletar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection