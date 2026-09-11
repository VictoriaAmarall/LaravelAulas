<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/book/update/{{$book->id}}" method="POST">
    @csrf
    Nome: <input type="text" name="name" value="{{$book->name}}">
    <button type="submit">Editar Livro</button>
    </form>
</body>
</html>