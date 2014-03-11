@extends('layouts.base')

@section('content')
	<div class="account-wall">
		<div class="margin">
			<img class="profile-img" src="{{ asset('images/logo-login.png') }}" alt="">

			{{ Form::open(array('url' => 'login', 'class' => 'form-signin')) }}

				@include('layouts.partials.errors')

				{{ Form::text('email', $value = null, array('class' => 'form-control', 'autofocus' => 'autofocus', 'placeholder' => 'E-mail', 'required' => 'required')) }}
				{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Senha', 'required' => 'required')) }}
				<button class="btn btn-lg btn-primary btn-block" type="submit">
					Entrar
				</button>
				
				
				<span class="clearfix"></span>

			{{ Form::close() }}
		</div>
	</div>
@stop