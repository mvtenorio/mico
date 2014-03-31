<div class="row top">
    <div class="col-md-6 col-md-offset-3">
        <a href="{{ route('items.index') }}" class="pull-right">Voltar</a>
        <h3 class="title">Editar "{{{ $item->name }}}"</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <img class="img-responsive thumbnail" src="{{ image($item, 250, 250) }}" alt="{{ $item->name }}" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="name" class="sr-only">Nome</label>
            {{ Form::text('name', $item->name, array('class' => 'form-control', 'placeholder' => 'Nome', 'autofocus' => 'autofocus'))}}
        </div>
        <div class="form-group">
            <label for="description" class="sr-only">Descrição</label>
            {{ Form::textarea('description', $item->description, array('class' => 'form-control', 'placeholder' => 'Descrição', 'rows' => '4'))}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="form-group pull-right">
            <button type="submit" class="btn btn-primary form-control">
                Salvar
            </button>
        </div>
    </div>
</div>