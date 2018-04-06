@extends('layouts.app')
 
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>
 
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
 
                   Hello {{ Auth::user()->name }}. you're logged in !!
                   <br>
                   <br>
                   {{-- <a href="{{route('userdetails.show', Auth::user()->id)}}"> User Details </a> --}}
                   {!! link_to(route('userdetails.show', Auth::user()->id), "Profile", ["classs"=>"display:none;"]) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection