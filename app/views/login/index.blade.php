@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="css/login.css">
@stop

@section('content')
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Mico</a>
			</div>
			<div class="navbar-collapse collapse">

				{{ Form::open(array('url' => 'login', 'class' => 'navbar-form navbar-right')) }}
					<div class="form-group">
						{{ Form::text('email', $value = null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
					</div>
					<div class="form-group">
						{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Senha')) }}
					</div>
					<button class="btn btn-success" type="submit">Entrar</button>
				{{ Form::close() }}
			</div><!--/.navbar-collapse -->
		</div>
	</div>
@stop