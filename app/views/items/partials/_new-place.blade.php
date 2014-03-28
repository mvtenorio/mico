<div class="row">
	<div class="col-md-12">
		{{ Form::open(array('route' => 'items.store', 'class' => 'form.inline')) }}
			<div class="form-group">
				<input type="hidden" name="type" value="PLACE">
				<input type="hidden" name="parent_id" value="{{ isset($parentId) ? $parentId : null }}">
				<label class="sr-only" for="new-item-name">Novo item</label>
				<div class="input-group">
					<input type="text" name="name" class="form-control" id="new-item-name" placeholder="Novo local">
					<div class="input-group-btn">
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-plus"></i>
						</button>
					</div>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>