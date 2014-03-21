<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Mico Beta</title>

	@include('layouts.head')

</head>
<body>

@section('content')

	@include('layouts.header')

	<ol class="breadcrumb text-center">
		<li><a href="{{ url('/') }}">Home</a></li>
		<li class="active">Itens</li>
	</ol>

	<form role="form" class="form">
		<div class="form-group col-md-6 col-md-offset-3 right-inner-addon">
			<i class="fa fa-search fa-lg"></i>
			<label class="sr-only" for="search-input">Buscar</label>
			<input type="text" class="form-control input-lg" id="search-input">
		</div>
	</form>

	<div class="wrapper">
		@yield('body')
	</div>

	@include('layouts.footer')

@show

</body>
</html>

@include('layouts.foot')