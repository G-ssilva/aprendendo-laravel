<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gerenciador de Condomínio</title>
</head>
<body>
    <form method="POST" action="/definirSindicoAtivo">
        @csrf
        <label for="condominio">Condominio:</label>
        <select id="condominio" name="condominio">
            @foreach($condominios as $condominio)
                <option value="{{ $condominio->id }}" @selected(old('condominio') == $condominio)>
                    {{ $condominio->nome }}
                </option>
            @endforeach
        </select>

        <label for="sindico">Sindico:</label>
        <select id="sindico" name="sindico">
            @foreach($sindicos as $sindico)
                <option value="{{ $sindico->id }}" @selected(old('sindico') == $sindico)>
                    {{ $sindico->nome }}
                </option>
            @endforeach
        </select>

        <input type="submit" value="Cadastrar">
    </form>

    <div>
        <h2>Sindicos Ativos</h2>
        @foreach ($condominiosSindicoAtivo as $condominioSindicoAtivo)
            <h3>Condominio {{ $condominioSindicoAtivo->id }}</h3>
            <p>Sindico: {{ $condominioSindicoAtivo->sindico->nome}}</p>
            <p>Sálario do Sindico: {{ $condominioSindicoAtivo->sindico->salario}}</p>
        @endforeach
    </div>
</body>
</html>
