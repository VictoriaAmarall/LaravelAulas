<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros</title>
</head>
<body>

    <h1>Livros Cadastrados</h1>

    <a href="{{ url('/book/create') }}">+ Novo Livro</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td><a href="/book/edit/{{$book->id}}">Editar</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum livro cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>