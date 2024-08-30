<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

</style>
@include('components.header')
<body class="d-flex flex-row">
	@include('components.sidebar')
	<div class="d-flex flex-column vw-100 min-vh-100">
		<div class="d-flex flex-column align-items-center">
			<div class="my-2">
				<span class="fs-1">Cadastrar condominio</span>
			</div>
			<hr class="w-75">
			<form class="fs-4 d-flex flex-column align-items-center" style="width: 600px" method="POST"
				  action="/cadastrarCondominio">
				@csrf
				<div class="mb-2">
					<label class="form-label" for="nome">Nome:</label>
					<input class="form-control form-control-lg" style="width: 400px" type="text" id="nome" name="nome"
						   value="{{ old('nome') }}"
						   required
						   placeholder="@error('nome'){{ $message }}@enderror"
						   maxlength="25"/>
				</div>
				<div class="mb-2">
					<label class="form-label" for="cep">CEP:</label>
					<input class="form-control form-control-lg" style="width: 400px" type="number" id="cep"
						   name="cep"
						   value="{{ old('cpf') }}"
						   required
						   placeholder="@error('cep'){{ $message }}@enderror"
						   maxlength="8"/>
				</div>
				<div class="mb-2">
					@include('components.buttonCadastrar')
				</div>
			</form>
		</div>
		<div class="d-flex flex-column align-items-center justify-content-center">
			<div class="mb-2">
				<span class="fs-1">Condominios</span>
			</div>
			<hr class="w-75">
			<div class="container">
				<div class="fs-4 row row-cols-3 justify-content-center gap-2 overflow-y-auto"
					 style="max-height: 500px;">
					@foreach ($condominios as $condominio)
						<div class="col">
							<div class="d-flex flex-column p-3 border border-primary-subtle rounded"
								 style="height: 150px">
								<span class="fw-bold">Condominio {{ $condominio->id }}</span>
								<span>Nome: {{ $condominio->nome }}</span>
								<span>CEP: {{ $condominio->cep }}</span>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</body>
</html>
