<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
<body class="d-flex flex-row">
	@include('components.sidebar')
	<div class="d-flex flex-column vw-100 min-vh-100">
		<div class="d-flex flex-column align-items-center">
			<div class="my-2">
				<span class="fs-1">Cadastrar apartamento</span>
			</div>
			<hr class="w-75">
			<form class="fs-4 d-flex flex-column align-items-center" style="width: 600px" method="POST"
				  action="/cadastrarApartamento">
				@csrf
				<div class="mb-2">
					<label for="bloco" class="form-label">Bloco:</label>
					<input class="form-control form-control-lg" style="width: 400px" type="text" id="bloco" name="bloco"
						   value="{{ old('bloco') }}"
						   required
						   placeholder="@error('bloco'){{ $message }}@enderror"
						   maxlength="10"/>
				</div>
				<div class="mb-2">
					<label for="numero" class="form-label">Número:</label>
					<input class="form-control form-control-lg" style="width: 400px" type="text" id="numero"
						   name="numero"
						   value="{{ old('numero') }}"
						   required
						   placeholder="@error('numero'){{ $message }}@enderror"
						   maxlength="8"/>
				</div>
				<div class="mb-2">
					<input class="btn btn-success fs-5" style="width: 150px" type="submit" value="Cadastrar">
				</div>
			</form>
		</div>
		<div class="d-flex flex-column align-items-center justify-content-center">
			<div class="mb-2">
				<span class="fs-1">Apartamentos</span>
			</div>
			<hr class="w-75">
			<div class="container">
				<div class="fs-4 row row-cols-4 justify-content-center gap-2 overflow-y-auto"
					 style="max-height: 500px;">
					@foreach ($apartamentos as $apartamento)
						<div class="col">
							<div class="d-flex flex-column p-3 border border-primary-subtle rounded"
								 style="width: 300px; height: 150px">
								<span class="fw-bold">Apartamento ID {{ $apartamento->id }}</span>
								<span class="">Bloco: {{ $apartamento->bloco }}</span>
								<span class="">Número: {{ $apartamento->numero }}</span>
							</div>
						</div>

					@endforeach
				</div>
			</div>
		</div>
	</div>
</body>
</html>
