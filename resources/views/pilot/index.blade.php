<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pilotos</title>
</head>
<body>

    <h1>Pilotos Cadastrados</h1>

    <a href="{{ url('/pilot/create') }}">+ Criar Piloto</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Carro</th>
                <th>Equipe</th>
                <th>Gênero</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pilots as $pilot)
                <tr>
                    <td>{{ $pilot->id }}</td>
                    <td>{{ $pilot->name }}</td>
                    <td>{{ $pilot->age }}</td>
                    <td>{{ $pilot->car }}</td>
                    <td>{{ $pilot->team }}</td>
                    <td>{{ $pilot->gender }}</td>
                    <td><a href="/pilot/edit/{{$pilot->id}}">Editar</a></td>
                    <td><a href="/pilot/delete/{{$pilot->id}}">Apagar</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum piloto cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>