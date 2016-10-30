@extends('layouts.sidebar')

@section('title', 'Avisos')

@section('content')

<h2> Editar integrante </h2>
<p> Aqu&iacute; podr&aacute;s editar los datos del integrante. <br> </p>

<div class="col-sm-12"> 
{!! Form::model($integrante,
    [
    'method' => 'PUT',
    'route' =>['integrantes.update', $integrante->id], 
    'files' => 'true' 
    ]) !!}
@include('integrantes.form', ['submit_text' => 'Editar'])
</div>
@endsection