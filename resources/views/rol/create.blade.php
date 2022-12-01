@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Agregar Role</h5>
        <a href="{{route('rol.index')}}" class="btn btn-primary ms-auto">
            <i class="fas fa-arrow-left"></i>
            Volver
        </a>
    </div>

    <div class="card-body">
        <form action="{{route('rol.store')}}" method="POST" enctype="multipart/form-data" id="crear">
        @include('rol.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="crear">
        <i class="fas fa-plus"></i> Crear
        </button>
    </div>
</div>

@endsection