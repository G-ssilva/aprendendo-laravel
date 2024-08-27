<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
<body>
	<form method="POST" action="/vincularCondominioSindico">
		@csrf
		<label for="condominio">Condominio:</label>
		<select id="condominio" name="condominio">
			@foreach($condominios as $condominio)
				<option value="{{ $condominio->id }}" @selected(old('condominio') == $condominio)>
					{{ $condominio->nome }} - {{ $condominio->cep }}
				</option>
			@endforeach
		</select>
		<br>
		@error('condominio')
		<div>{{ $message }}</div>
		@enderror
		<br>
		<label for="sindicos[]">Sindicos:</label>
		@foreach($sindicos as $sindico)
			<br>
			<input type="checkbox" name="sindicos[]" value="{{ $sindico->id }}">{{ $sindico->nome }}
		@endforeach
		<br>
		@error('sindico')
		<div>{{ $message }}</div>
		@enderror

		<input type="submit" value="Cadastrar">
	</form>

	<div>
		<h2>Sindicos dos Condiminios</h2>
		@foreach ($condominios as $condominio)
			<h3>Condominio {{ $condominio->id }}</h3>
			@if($condominio->sindicos->isEmpty())
				<p>Nenhum sindico encontrado neste condominio.</p>
			@else
				@foreach($condominio->sindicos as $sindicos)
					<p>Sindico: {{ $sindicos->nome }}</p>
				@endforeach
			@endif
		@endforeach
	</div>
</body>
</html>
