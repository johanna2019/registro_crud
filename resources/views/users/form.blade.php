@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre:</label>

            <p class="form-control">
                {{ $user->name }}
            </p>
        </div>

    </div>
    <div class="col-12">
        <div class="form-group">

            {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $rol)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                        {{ $rol->name }}
                    </label>
                </div>
            @endforeach

            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt2']) !!}

            {!! Form::close() !!}

        </div>
    </div>

    <div>
