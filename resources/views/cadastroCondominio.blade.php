<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gerenciador de Condomínio</title>
</head>
<body>
    <form method="POST" action="/cadastrarCondominio">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}"/>

        @error('nome')
        <div>{{ $message }}</div>
        @enderror

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" value="{{ old('cpf') }}"/>

        @error('cep')
        <div>{{ $message }}</div>
        @enderror


        <input type="submit" value="Cadastrar">
    </form>

    <div>
        <h2>Condominios</h2>
        @foreach ($condominios as $condominio)
            <h3>Condominio {{ $condominio->id }}</h3>
            <p>Nome: {{ $condominio->nome }}</p>
            <p>CEP: {{ $condominio->cep }}</p>
        @endforeach
    </div>
</body>
</html>
