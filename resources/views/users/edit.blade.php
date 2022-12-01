@extends('layouts.app')
@section('template_title')
    Update Usuarios
@endsection
@section('content')

<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Asignar Role</h5>
        <a href="{{route('users.index')}}" class="btn btn-primary ms-auto">
            <i class="fas fa-arrow-left"></i>
            Volver
        </a>
    </div>

    <div class="card-body">
        <form action="{{route('users.update',$user->id)}}" method="POST" name="crear">
        @include('users.form')
        </form>
    </div>
</div>

@endsection