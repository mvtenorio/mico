<div>
    <div class="form-group">
        {{ Form::label('name', 'Nome:') }}
        {{ Form::text('name') }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Descrição:') }}
        {{ Form::textarea('name') }}
    </div>

	<div class="form-group">
		{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
	</div>
</div>