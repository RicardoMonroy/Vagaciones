@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('roles.index') }}">Roles</a>
        </li>
        <li class="breadcrumb-item">
            Edición
        </li>
        <!-- Breadcrumb Menu-->
        {{-- <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @can('roles.create')
                <a class="btn" href="{{ route('roles.create') }}">
                    <i class="icon-plus"></i> Crear</a>
            @endcan
        </div>
        </li> --}}
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            @can('roles.create')
                                <a class="btn" href="{{ route('roles.create') }}">
                                    <i class="icon-plus"></i> Crear</a>
                            @endcan
                        </div>
                        <div class="card-body">
                            {!! Form::model($role, ['route' => ['roles.update', $role->id],
                                'method' => 'PUT']) !!}
                                @include('roles.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
