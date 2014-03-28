<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<a href="{{ url('/') }}" class="navbar-brand">Mico <i class="fa fa-question fa-lg"></i></a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
        	<li>
        		<a href="{{ route('items.index') }}"><span class="fa fa-rocket"></span> Itens</a>
        	</li>
        	<li>
        		<a href="{{ route('tags.index') }}"><span class="fa fa-tags"></span> Tags</a>
        	</li>
        </ul>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown" style="margin-right:15px">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-gear fa-lg"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">Configurações</a></li>
					<li><a href="#">Sobre</a></li>
					<li class="divider"></li>
					<li>{{ link_to('logout', 'Sair') }}</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>