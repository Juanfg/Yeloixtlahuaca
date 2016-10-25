@extends('layouts.sidebar')

@section('title', 'Actividades')

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
    <h2> Crear conductor </h2>
    <h3> Aqu&iacute; podr&aacute;s crear una actividad. <br> La llave de acceso es la llave que tendr&aacute;s que dar a tu conductor para que inicie sesi&oacute;n </h3>
    <br>
    {!! Form::model(new App\Actividad, ['route' =>'actividades.store', 'files' => 'true' ]) !!}
    @include('actividades.form', ['submit_text' => 'Crear'])
</div>

@endsection