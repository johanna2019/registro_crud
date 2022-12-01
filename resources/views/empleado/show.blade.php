@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleado.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $empleado->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $empleado->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $empleado->contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
