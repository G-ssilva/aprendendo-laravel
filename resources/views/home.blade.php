<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
<body>
	<div class="d-flex flex-row">
		@include('components.sidebar')
	</div>
</body>
</html>