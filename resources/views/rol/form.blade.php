@csrf

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ isset($role) ? $role->name : old('name') }}"
                required>
        </div>
    </div>
    <H3>Lista de permisos</H3>
    @foreach ($permissions as $permission)
        <div>
            <label>
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                {{ $permission->name }}
            </label>
        </div>
    @endforeach

    <div>
