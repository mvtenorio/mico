<div class="row">

    <div class="col-md-8 col-md-offset-2">
        <a href="{{ route('items.index') }}" class="pull-right">Voltar</a>
        <h3 class="title">Editar "{{ $item->name }}"</h3>
    </div>

</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <img class="img-responsive" src="{{ $item->isObject() ? asset('img/sample/rocket.png') : asset('img/sample/box.png') }}" />
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label for="name" class="sr-only">Nome</label>
            {{ Form::text('name', $item->name, array('class' => 'form-control input-lg', 'placeholder' => 'Nome', 'autofocus' => 'autofocus'))}}
        </div>
        <div class="form-group">
            <label for="description" class="sr-only">Descrição</label>
            {{ Form::textarea('description', $item->description, array('class' => 'form-control input-lg', 'placeholder' => 'Descrição', 'autofocus' => 'autofocus'))}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2 col-md-offset-10">
        <button type="submit" class="btn btn-primary form-control">
            Salvar
        </button>
    </div>
</div>