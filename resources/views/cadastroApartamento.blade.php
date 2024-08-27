<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
<body>
	<form method="POST" action="/cadastrarApartamento">
		@csrf
		<label for="bloco">Bloco:</label>
		<input type="text" id="bloco" name="bloco" value="{{ old('bloco') }}"/>

		@error('bloco')
		<div>{{ $message }}</div>
		@enderror

		<label for="numero">Número:</label>
		<input type="text" id="numero" name="numero" value="{{ old('numero') }}"/>

		@error('numero')
		<div>{{ $message }}</div>
		@enderror

		<input type="submit" value="Cadastrar">
	</form>

	<div>
		<h2>Apartamentos</h2>
		@foreach ($apartamentos as $apartamento)
			<h3>Apartamento {{ $apartamento->id }}</h3>
			<p>Bloco: {{ $apartamento->bloco }}</p>
			<p>Número: {{ $apartamento->numero }}</p>
		@endforeach
	</div>
</body>
</html>
