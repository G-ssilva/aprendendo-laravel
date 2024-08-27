<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
<body>
	<form method="POST" action="/cadastrarUsuario">
		@csrf
		<label for="login">Login:</label>
		<input type="text" id="login" name="login" value="{{ old('login') }}"/>

		@error('login')
		<div>{{ $message }}</div>
		@enderror

		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" value="{{ old('senha') }}"/>

		@error('senha')
		<div>{{ $message }}</div>
		@enderror

		<label for="role">Role:</label>
		<select id="role" name="role">
			@foreach($roles as $role)
				<option value="{{ $role->id }}" @selected(old('role') == $role)>
					{{ $role->nome }}
				</option>
			@endforeach
		</select>

		<input type="submit" value="Cadastrar">
	</form>

	<div>
		<h2>Usuários</h2>
		@foreach ($usuarios as $usuario)
			<h3>Usuario {{ $usuario->id }}</h3>
			<p>Login: {{ $usuario->login }}</p>
			<p>Role: {{ $usuario->role->nome }}</p>
		@endforeach
	</div>
</body>
</html>
