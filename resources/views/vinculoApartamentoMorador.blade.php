<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gerenciador de Condomínio</title>
</head>
<body>
	<form method="POST" action="/vincularApartamentoMorador">
		@csrf
		<label for="apartamento">Apartamento:</label>
		<select id="apartamento" name="apartamento">
			@foreach($apartamentos as $apartamento)
				<option value="{{ $apartamento->id }}" @selected(old('apartamento') == $apartamento)>
					{{ $apartamento->bloco }} - {{ $apartamento->numero }}
				</option>
			@endforeach
		</select>
		<br>
		@error('apartamento')
		<div>{{ $message }}</div>
		@enderror
		<br>
		<label for="moradores[]">Moradores:</label>
		@foreach($moradores as $morador)
			<br>
			<input type="checkbox" name="moradores[]" value="{{ $morador->id }}">{{ $morador->nome }}
		@endforeach
		<br>
		@error('moradores')
		<div>{{ $message }}</div>
		@enderror

		<input type="submit" value="Cadastrar">
	</form>

	<div>
		<h2>Moradores dos Apartamentos</h2>
		@foreach ($apartamentos as $apartamento)
			<h3>Apartamento {{ $apartamento->id }}</h3>
			@if($apartamento->moradores->isEmpty())
				<p>Nenhum morador encontrado neste apartamento.</p>
			@else
				@foreach($apartamento->moradores as $morador)
					<p>Morador: {{ $morador->nome }}</p>
				@endforeach
			@endif
		@endforeach
	</div>
</body>
</html>
