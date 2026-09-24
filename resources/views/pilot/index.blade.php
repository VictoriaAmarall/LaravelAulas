<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros</title>
</head>
<body>

    <h1>Livros Cadastrados</h1>

    <a href="{{ url('/pilot/create') }}">+ Novo Livro</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pilots as $pilot)
                <tr>
                    <td>{{ $pilot->id }}</td>
                    <td>{{ $pilot->name }}</td>
                    <td><a href="/pilot/edit/{{$pilot->id}}">Editar</a></td>
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