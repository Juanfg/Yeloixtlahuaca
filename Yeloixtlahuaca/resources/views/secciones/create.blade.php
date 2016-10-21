@extends('layouts.sidebar')

@section('title', 'Secciones')

@section('content')

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="col-sm-12"> 
<h2> Agregar una secci&oacute;n </h2>
{!! Form::model(new App\Seccion, ['route' =>'secciones.store', 'files' => 'true' ]) !!}
@include('secciones.form', ['submit_text' => 'Agregar'])
</div>
@endsection