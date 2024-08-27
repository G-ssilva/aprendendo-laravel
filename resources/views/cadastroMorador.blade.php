<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
<body>
	<form method="POST" action="/cadastrarMorador">
		@csrf
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" value="{{ old('nome') }}"/>

		@error('nome')
		<div>{{ $message }}</div>
		@enderror

		<label for="cpf">CPF:</label>
		<input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}"/>

		@error('cpf')
		<div>{{ $message }}</div>
		@enderror


		<input type="submit" value="Cadastrar">
	</form>

	<div>
		<h2>Moradores</h2>
		@foreach ($moradores as $morador)
			<h3>Morador {{ $morador->id }}</h3>
			<p>Nome: {{ $morador->nome }}</p>
			<p>CPF: {{ $morador->cpf }}</p>
		@endforeach
	</div>
</body>
</html>
