<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="navbar-header">
		<a href="{{ url('/') }}" class="navbar-brand"><i class="fa fa-search"></i>&nbsp; Mico</a>
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
					<i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="#"><i class="fa fa-info-circle fa-fw"></i> Sobre o Mico</a>
					</li>
					<li class="divider"></li>
					<li>{{ link_to('logout', 'Sair') }}</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>