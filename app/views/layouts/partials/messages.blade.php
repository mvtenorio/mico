@if(isset($message))
	<div class="alert alert-dismissable alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		{{{ $message }}}
	</div>
@endif