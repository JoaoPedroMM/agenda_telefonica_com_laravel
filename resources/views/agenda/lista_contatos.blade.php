<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
</head>
    <body>
        <table>
        <tr><th>Nome</th><th>Número</th></tr>
        @foreach($contatos as $contato)
            <tr>
                <td>{{$contato->coluna_nome}}</td>
                <td>{{$contato->coluna_numero}}</td>
                <td><a href="{{ route('editar_contato', ['id'=>$contato->id]) }}"
                        title="Editar contato de {{ $contato->coluna_nome }}">Editar</a></td>
                <td><a href="{{ route('excluir_contato', ['id'=>$contato->id]) }}"
                        title="Excluir contato de {{ $contato->coluna_nome }}">Excluir</a></td>
            </tr>
        @endforeach
        </table>
        <a href="{{ route('salvar_contato') }}">Criar novo contato</a>
    </body>
</html>