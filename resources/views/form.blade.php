<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<div class="form-group"> 
        {!! Form::label('fullname', 'Full name', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> 
          {!! Form::text('full_name', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
            {{--  <div class="text-danger">{!! $errors->first('full_name') !!}</div>   --}}
        </div> 
        <div class="clear"></div> 
    </div>
    
    <div class="form-group"> 
            {!! Form::label('gender', 'Gender', array('class' => 'col-lg-3 control-label')) !!} 
            <div class="col-lg-9"> {!! Form::text('gender', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
                <div class="text-danger">{!! $errors->first('gender') !!}</div> 
            </div> 
            <div class="clear"></div> 
        </div>
    
    <div class="form-group"> 
        {!! Form::label('address', 'Address', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> {!! Form::text('address', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
            <div class="text-danger">{!! $errors->first('address') !!}</div> 
        </div> 
        <div class="clear"></div> 
    </div>
    
    <div class="form-group"> 
        {!! Form::label('city', 'City', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> {!! Form::text('city', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
            <div class="text-danger">{!! $errors->first('city') !!}</div> 
        </div> 
        <div class="clear"></div> 
    </div>
    
    <div class="form-group"> 
        {!! Form::label('province', 'Province', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> {!! Form::text('province', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
            <div class="text-danger">{!! $errors->first('province') !!}</div> 
        </div> 
        <div class="clear"></div> 
    </div>
    
    <div class="form-group"> 
        <div class="col-lg-3"></div> 
        <div class="col-lg-9"> 
            {!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!} 
            {!! link_to(route('article.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
        </div> 
        <div class="clear"></div> 
    </div>