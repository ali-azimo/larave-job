<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastar</title>
</head>
<body>
        <h1>Cadastrar</h1>
        {{-- Mostrar erros --}}
        @if($errors->any())
            <span style="color: #db2020">
                @foreach ($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
            </span>
            <br>
        @endif

        <form action="{{route('contas.store')}}" method="POST">
            @csrf
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="nome da conta" value="{{old('nome')}}">

            <br><br>
            <label for="">Valor</label>
            <input type="text" name="valor" id="valor" placeholder="Usar '.' para separar nos centavos" value="{{old('valor')}}">
            <br><br>
            <label for="">Vencimento</label>
            <input type="date" name="vencimento" id="vencimento" value="{{old('vencimento')}}"><br>

            <button type="submit">Cadastar</button>
        </form>
        <a href="{{route('contas.index')}}">Listas contas</a>



</body>
</html>
