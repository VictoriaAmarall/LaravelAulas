<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/pilot/update/{{$pilot->id}}" method="POST">
    @csrf
    Nome: <input type="text" name="name" value="{{$pilot->name}}">
    Idade: <input type="text" name="age" value="{{$pilot->age}}">
    Carro: <input type="text" name="car" value="{{$pilot->car}}">
    Equipe: <input type="text" name="team" value="{{$pilot->team}}">
    Gênero: <input type="text" name="gender" value="{{$pilot->gender}}">
    <button type="submit">Editar Livro</button>
    </form>
</body>
</html>