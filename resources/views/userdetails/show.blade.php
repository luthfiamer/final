@extends("layouts.app") 
@section("content") 


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
       <br>
<p class=" text-info"> {!! $userdetails->created_at !!} </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{!! $userdetails->full_name !!}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                
                 {{-- <div class="col-md-3 col-lg-3 " align="center"> 
                   <img class="img-responsive" src="{{asset($userdetails->path)}}"> 
                  </div>  --}}


                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Date of Birth:</td>
                        <td>{!! $users->birthday !!}</td>
                      </tr> 
                      <tr>
                        <td>Gender:</td>
                        <td>{!! $userdetails->gender !!}</td>
                      </tr>  
                      <tr>
                        <td>Religion:</td>
                        <td>{!! $userdetails->religion !!}</td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td>{!! $userdetails->address !!}</td>
                      </tr>
                      <tr>
                        <td>City:</td>
                        <td>{!! $userdetails->city !!}</td>
                      </tr>
                      <tr>
                        <td>Province</td>
                        <td>{!! $userdetails->province !!}</td>
                      </tr>
                      <tr>
                        <td>Expertise:</td>
                        <td>{!! $userdetails->expertise !!}</td>
                      </tr>
                      <tr>
                        <td>Experience:</td>
                        <td>{!! $userdetails->experience !!}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            @if (!Auth::guest())
                 <div class="panel-footer">
                        <span class="pull-right">
                            {!! Form::open(array('route' => array('userdetails.destroy', $userdetails->id), 'method' => 'delete')) !!}
                            {!! link_to(route('userdetails.edit', Auth::user()->id), 'Edit', ['class' => 'btn btn-raised btn-warning']) !!}
                            {!! link_to(route('home'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
                            {!! Form::close() !!}
                        </span>
                    </div>
            @endif
          </div>
        </div>
      </div>
    </div>
@endsection



















{{--  @if (!Auth::guest())
<div> 
        {!! Form::open(array('route' => array('article.destroy', $article->id), 'method' => 'delete')) !!} 
        {!! link_to(route('article.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
        {!! link_to(route('article.edit', $article->id), 'Edit', ['class' => 'btn btn-raised btn-warning']) !!}
        {!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
        {!! Form::close() !!} 
</div>
@endif  --}}