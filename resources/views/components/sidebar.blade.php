<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark-subtle min-vh-100" style="width: 280px">
	<a href="/" class="d-flex align-items-center mb-2 link-body-emphasis text-decoration-none">
		<span class="fs-4">Gerenciador de Condominios</span>
	</a>
	<hr>
	<ul class="nav nav-pills flex-column mb-2">
		<li class="nav-item">
			<a href="{{ route('apartamento') }}"
			   class="nav-link {{ Route::is('apartamento') ? 'active' : 'link-body-emphasis' }}">
				Apartamentos
			</a>
		</li>
		<li>
			<a href="#" class="nav-link link-body-emphasis">
				Condominios
			</a>
		</li>
		<li>
			<a href="#" class="nav-link link-body-emphasis">
				Moradores
			</a>
		</li>
		<li>
			<a href="#" class="nav-link link-body-emphasis">
				Roles
			</a>
		</li>
		<li>
			<a href="#" class="nav-link link-body-emphasis">
				Sindicos
			</a>
		</li>
	</ul>
	<hr>
	<ul class="nav nav-pills flex-column mb-auto">
		<li class="nav-item">
			<a href="/" class="nav-link link-body-emphasis">
				Vincular morador ao apartamento
			</a>
		</li>
		<li>
			<a href="#" class="nav-link link-body-emphasis">
				Vincular sindico ao condomínio
			</a>
		</li>
	</ul>
	<hr>
	<div class="d-flex flex-row justify-content-between">
		<a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none">
			<strong>Usuário</strong>
		</a>
		<a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none">
			<strong>Sair</strong>
		</a>
	</div>
</div>