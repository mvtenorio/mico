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

	@yield('body')

	@include('layouts.footer')

@show

</body>
</html>

@include('layouts.foot')