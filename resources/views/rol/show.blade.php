@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Rol: {{$role->id}}</h5>
        <a href="{{route('rol.index')}}" class="btn btn-primary ms-auto">
            <i class="fas fa-arrow-left"></i>
            Volver
        </a>
    </div>

    <div class="card-body">
        @include('rol.form')
    </div>
    
</div>

@endsection