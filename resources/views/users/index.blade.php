@extends('layouts.app')

@section('content')

<div>


    @if ($users->count())
        <div class="card-body ">
            <div>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th role="button" >Id</th>
                            <th role="button" >Nombre</th>
                            <th role="button" >Email</th>
                            <th>Accion</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                
                                <td width="10px">
                                @can('roles')
                                 <a class="btn btn-primary" href="{{ route ('users.edit', $user->id) }}">
                                        Editar </a>
                                @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @else
        <div class="car-body">
            <div class="alert alert-warning alert-dismissible" role="alert">

                <strong>
                    Advertencia,
                </strong>
                No coincide con mas registros
                <button type="button" 
                class="btn-close" 
                data-bs-dismiss="alert" 
                aria-label="Close">
                </button>
            </div>
        </div>
    @endif
</div>


@endsection