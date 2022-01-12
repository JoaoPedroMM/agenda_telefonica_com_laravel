<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criar novo contato</title>
    </head>
    <body>
        <form action="{{ route('salvar_contato') }}" method="post">
        @csrf
            <div><label for="coluna_nome">Nome</label><input type="text" name="coluna_nome" id="coluna_nome"></div>
            <div><label for="coluna_numero">Número</label><input type="text" name="coluna_numero" id="coluna_numero"></div>
            <button type="submit">Criar</button>
            <a href="{{ route('lista_de_contatos') }}">Listar contatos</a>
        </form>
    </body>
</html>