@extends("layouts.app") 
@section("content") 

<h3>Edit User Details</h3> 
{!! Form::model($userdetails, ['route' => ['userdetails.update', $userdetails->id], 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form', 'files' => 'true']) !!}
@include('userdetails.form') 
{!! Form::close() !!} 
@stop

{{--  {!! Form::open(['route' => ['userdetails.update',  $userdetails->id], 'class' => 'formhorizontal', 'role' => 'form', 'method' => 'put']) !!}  --}}