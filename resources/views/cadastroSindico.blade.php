<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
<body>
	<form method="POST" action="/cadastrarSindico">
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

		<label for="salario">Salário:</label>
		<input type="number" id="salario" name="salario" step="any" value="{{ old('salario') }}"/>

		@error('salario')
		<div>{{ $message }}</div>
		@enderror


		<input type="submit" value="Cadastrar">
	</form>

	<div>
		<h2>Sindicos</h2>
		@foreach ($sindicos as $sindico)
			<h3>Sindico {{ $sindico->id }}</h3>
			<p>Nome: {{ $sindico->nome }}</p>
			<p>CPF: {{ $sindico->cpf }}</p>
			<p>Salário: R$ {{ $sindico->salario }}</p>
		@endforeach
	</div>
</body>
</html>
