<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Visualizar dados</h1>
        <a href="{{route('contas.index')}}">Listas contas</a>

<br><br>
        @if(@session('success'))
                <span style="color: rgb(49, 230, 49); font-weight: 500">
                    {{session('success')}}
                </span>
        @endif

</body>
</html>
