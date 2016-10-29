@extends('layouts.sidebar')

@section('title', 'Avisos')

@section('content')

<h2> Editar aviso </h2>
<p> Aqu&iacute; podr&aacute;s editar el aviso. <br> </p>

<div class="col-sm-12"> 
{!! Form::model($aviso,
    [
    'method' => 'PUT',
    'route' =>['avisos.update', $aviso->id], 
    'files' => 'true' 
    ]) !!}
@include('avisos.form', ['submit_text' => 'Editar'])
</div>
@endsection