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
        <tr><th>Nome</th><th>         </th><th>Número</th></tr>
        @foreach($contatos as $contato)
            <tr>
                <td>{{$contato->coluna_nome}}</td>
                <td>---------</td>
                <td>{{$contato->coluna_numero}}</td>
                <td>---------</td>
                <td>Editar</td>
                <td>Excluir</td>
            </tr>
        @endforeach
    </body>
</html>