<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
<body>
	<form method="POST" action="/login">
		@csrf
		<label for="login">Login:</label>
		<input type="text" id="login" name="login" value="{{ old('login') }}"/>

		@error('login')
		<div>{{ $message }}</div>
		@enderror

		<label for="password">Senha:</label>
		<input type="password" id="password" name="password" value="{{ old('password') }}"/>

		@error('password')
		<div>{{ $message }}</div>
		@enderror

		<input type="submit" value="Acessar">
	</form>
</body>
</html>
