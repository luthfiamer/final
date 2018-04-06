@extends("layouts.app") 
@section("content") 

<h3>Filling user details</h3> 
{!! Form::open(['route' => 'userdetails.store', 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true']) !!} 
@include('userdetails.form') 
{!! Form::close() !!} 

@stop
