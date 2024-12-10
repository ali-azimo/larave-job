<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('contas.create')}}">Criar</a>
    <h1>Carregar contas</h1>

    <a href="{{route('contas.edit')}}">Editar</a>
    <a href="{{route('contas.show')}}">Mostrar</a>
    {{-- <a href="{{route('contas.destroy')}}">Delete</a> --}}

    @forelse ($contas as $conta)
    <br><hr>
    Nome: {{$conta->nome}}
    <br><hr>
    {{-- Como mostrar valor --}}
    Valor: {{'Mts '. number_format($conta->valor, 2, ',', '.')}}
    <br><hr>
    {{-- Formatar data --}}
    Vencimento: {{\Carbon\Carbon::parse($conta->vencimento)->tz('Africa/Maputo')->format('d/m/Y')}}
    <br><hr>
        @empty
            <span style="color: #b81818">
                <br>
                Nenhuma conta encontrada
            </span>
    @endforelse

</body>
</html>
