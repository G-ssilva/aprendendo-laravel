<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark-subtle min-vh-100" style="width: 280px">
	<a href="/" class="d-flex align-items-center mb-2 link-body-emphasis text-decoration-none">
		<span class="fs-4">Gerenciador de Condominios</span>
	</a>
	<hr>
	<ul class="nav nav-pills flex-column mb-2">
		@can('isAdmin', Auth::user())
			<li class="nav-item">
				<a href="{{ route('apartamento') }}"
				   class="nav-link {{ Route::is('apartamento') ? 'active' : 'link-body-emphasis' }}">
					Apartamentos
				</a>
			</li>
			<li>
				<a href="{{ route('condominio') }}"
				   class="nav-link {{ Route::is('condominio') ? 'active' : 'link-body-emphasis' }}">
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
		@endcan
		@can('isAdminOrSindico', Auth::user())
			<li>
				<a href="#" class="nav-link link-body-emphasis">
					Sindicos
				</a>
			</li>
		@endcan
	</ul>

	<ul class="nav nav-pills flex-column mb-auto">
		@can('isAdmin', Auth::user())
			<hr>
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
		@endcan
	</ul>
	<hr>
	<div class="d-flex flex-row justify-content-between">
		<a href="#" class="d-flex flex-column link-body-emphasis text-decoration-none">
			<div>
				<strong>Login: </strong><span>{{ Auth::user()->login }}</span>
			</div>
			<div>
				<strong>Perfil: </strong><span>{{ Auth::user()->role->nome}}</span>
			</div>
		</a>
		<a href="{{ route('logout') }}" class="d-flex align-items-center link-body-emphasis text-decoration-none">
			<strong>Sair</strong>
		</a>
	</div>
</div>