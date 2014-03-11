@if(sizeof($errors))
	<div class="alert alert-dismissable alert-danger">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Atenção!</strong>

		@foreach($errors->all() as $message)
			<p>• {{ $message }}</p>
		@endforeach
	</div>
@endif