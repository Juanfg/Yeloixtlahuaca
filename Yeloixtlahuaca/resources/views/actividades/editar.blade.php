@extends('layouts.sidebar')

@section('title', 'Actividades')

@section('content')

<h2> Editar actividad </h2>
<p> Aqu&iacute; podr&aacute;s editar la actividad. <br> </p>

<div class="col-sm-12"> 
{!! Form::model($actividad,
    [
    'method' => 'PUT',
    'route' =>['actividades.update', $actividad->id], 
    'files' => 'true' 
    ]) !!}
@include('actividades.form', ['submit_text' => 'Editar'])
</div>
@endsection