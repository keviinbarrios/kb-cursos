<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos de Programacion</title>
</head>
<body>
    <h1>Cursos de Programacion</h1>

    <ol>
        @foreach ($categories as $category)
            <li>{{$category->name}}</li>    
        @endforeach
    </ol>
</body>
</html>