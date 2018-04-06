@extends ('layouts.app')

@section ('content')
  

{!! Form::open(['route' => 'userdetails.store', 'class' => 'formhorizontal', 'role' => 'form']) !!}
@include('userdetails.form') 
{!! Form::close() !!}


@endsection