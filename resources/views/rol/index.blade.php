@extends('layouts.app')

@section('content')

<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Roles y Permisos</h5>

            <a href="{{ route('rol.create') }}" class="btn btn-primary ms-auto ">
                <i class="fas fa-plus"></i>
                Agregar</a>

    </div>
</div>

    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>

                    <th>Id</th>
                    <th>Nombre de Role</th>
                    <th>Accion</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($role as $rol)
                    <tr>
                        <td>{{ $rol->id }}</td>
                        <td>{{ $rol->name }}</td>
                        <td>
                            <a href="{{ route('rol.show', $rol->id) }}"><i class="fas fa-eye"></i>Ver</a>
                            <a href="{{ route('rol.edit', $rol->id) }}"><i class="fas fa-edit"></i>Editar</a>
                            <button type="submit" form="delete_{{ $rol->id }}"
                                onclick="return confirm('¿estas seguro de eliminar el registro?')">
                                <i class="fas fa-trash"></i>
                                <form action="{{ route('rol.destroy', $rol->id) }}" id="delete_{{$rol->id}}"
                                    method="post" enctype="multipart/form-data" hidden>
                                    @csrf
                                    @method('delete')
                                </form>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
