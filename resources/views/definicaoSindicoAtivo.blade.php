<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
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

		@error('condominio')
		<div>{{ $message }}</div>
		@enderror

		<label for="sindico">Sindico:</label>
		<select id="sindico" name="sindico">
			@foreach($sindicos as $sindico)
				<option value="{{ $sindico->id }}" @selected(old('sindico') == $sindico)>
					{{ $sindico->nome }}
				</option>
			@endforeach
		</select>

		@error('sindico')
		<div>{{ $message }}</div>
		@enderror

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
