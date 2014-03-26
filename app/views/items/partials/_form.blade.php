<div>
    <div class="row">
        <div class="col-md-12 form-group">
            <button type="submit" class="btn btn-default pull-right">
                <i class="fa fa-save"></i>
            </button>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12 form-group">
            <h1><div data-placeholder="Nome" contenteditable>{{{ $item->name }}}</div></h1>
            <hr>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-6 form-group">
            <img width="200" src="http://media.npr.org/assets/img/2012/01/04/ap99121501386_custom-feedbb6efa738efee47e7828e805758dc427fa60-s6-c30.jpg" alt="{{ $item->name }}">
        </div>
         <div class="col-md-6 form-group">
            <h3><div data-placeholder="Descrição" contenteditable>{{{ $item->description }}}</div></h3>
        </div>
    </div>
</div>