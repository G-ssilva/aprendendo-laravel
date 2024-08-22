<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gerenciador de Condomínio</title>
</head>
<body>
    <form method="POST" action="/cadastrarRole">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}"/>

        @error('nome')
        <div>{{ $message }}</div>
        @enderror

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao">{{ old('descricao') }}</textarea>

        @error('descricao')
        <div>{{ $message }}</div>
        @enderror

        <input type="submit" value="Cadastrar">
    </form>

    <div>
        <h2>Roles</h2>
        @foreach ($roles as $role)
            <h3>Role {{ $role->id }}</h3>
            <p>Nome: {{ $role->nome }}</p>
            <p>Descrição: {{ $role->descricao }}</p>
        @endforeach
    </div>
</body>
</html>
