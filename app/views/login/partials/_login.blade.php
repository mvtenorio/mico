<div class="container" style="margin-left: -15%;left: 50%;position: relative">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><i class="fa fa-sign-in"></i> Usuários cadastrados</legend>
            {{ Form::open(array('url' => 'login', 'class' => 'form-signin')) }}

                @include('layouts.partials.errors')

                {{ Form::email('email', $value = null, array('class' => 'form-control', 'autofocus' => 'autofocus', 'placeholder' => 'E-mail', 'required' => 'required')) }}
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Senha', 'required' => 'required')) }}

                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Entrar
                </button>

                <label class="checkbox pull-left lembrar">
                    {{ Form::checkbox('remember-me') }}
                    Lembrar-me
                </label>

                <a href="{{ action('RemindersController@getRemind') }}" class="pull-right need-help">Esqueceu a senha? </a>
                <span class="clearfix"></span>

            {{ Form::close() }}
        </div>
    </div>
</div>