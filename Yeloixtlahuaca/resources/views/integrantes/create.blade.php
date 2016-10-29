@extends('layouts.sidebar')

@section('title', 'Integrantes')

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
    <h2> Agregar integrante </h2>
    <h3> Aqu&iacute; podr&aacute;s agregar integrantes. </h3>
    <br>
    {!! Form::model(new App\Integrante, ['route' =>'integrantes.store', 'files' => 'true' ]) !!}
    @include('integrantes.form', ['submit_text' => 'Crear'])
</div>

@endsection