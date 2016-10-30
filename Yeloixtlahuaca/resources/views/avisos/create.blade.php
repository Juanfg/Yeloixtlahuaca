@extends('layouts.sidebar')

@section('title', 'Avisos')

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
    <h2> Crear aviso </h2>
    <h3> Aqu&iacute; podr&aacute;s crear avisos. </h3>
    <br>
    {!! Form::model(new App\Aviso, ['route' =>'avisos.store', 'files' => 'true' ]) !!}
    @include('avisos.form', ['submit_text' => 'Crear'])
</div>

@endsection