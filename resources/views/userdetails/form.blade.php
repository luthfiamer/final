
<div class:"container">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
<div class="form-group"> 
        {!! Form::label('fullname', 'Full name', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> 
          {!! Form::text('full_name', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
             <div class="text-danger">{!! $errors->first('full_name') !!}</div>  
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
        {!! Form::label('religion', 'Religion', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> {!! Form::text('religion', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
            <div class="text-danger">{!! $errors->first('Religion') !!}</div> 
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
        {!! Form::label('expertise', 'Expertise', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> {!! Form::text('expertise', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
            <div class="text-danger">{!! $errors->first('expertise') !!}</div> 
        </div> 
        <div class="clear"></div> 
    </div>

    <div class="form-group"> 
        {!! Form::label('experience', 'Experience', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> {!! Form::text('experience', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
            <div class="text-danger">{!! $errors->first('experience') !!}</div> 
        </div> 
        <div class="clear"></div> 
    </div>

    {{-- <div class="form-group"> 
            {!! Form::label('upload', 'Choose', array('class' => 'col-lg-3 control-label')) !!} 
            <div class="col-lg-9"> 
            {!! Form::file('path', null, array('class' =>'form-control')) !!} 
                <div class="text-danger">{!! $errors->first('content') !!}</div>
            </div> 
            <div class="clear"></div> 
        </div>  --}}
   
    <div class="form-group"> 
            <div class="col-lg-3"></div> 
            <div class="col-lg-9"> 
                {!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!} 
                {!! link_to(route('home'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
            </div> 
            <div class="clear"></div> 
        </div>    
    </div>
    </div>
























{{-- 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}


{{-- <div class="form-group"> 
        {!! Form::label('fullname', 'Full name', array('class' => 'col-lg-3 control-label')) !!} 
        <div class="col-lg-9"> 
          {!! Form::text('full_name', null, array('class' => 'form-control', 'autofocus' => 'true')) !!} 
             <div class="text-danger">{!! $errors->first('full_name') !!}</div>  
        </div> 
        <div class="clear"></div> 
    </div>
    
    <div class="form-group"> 
            {!! Form::label('gender', 'Gender', array('class' => 'col-lg-3 control-label')) !!} 
            <div class="col-lg-9"> {!! Form::select('gender', ['Male', 'Female']) !!} 
                <div class="text-danger">{!! $errors->first('gender') !!}</div> 
            </div> 
            <div class="clear"></div> 
        </div>

        <div class="form-group"> 
            {!! Form::label('religion', 'Religion', array('class' => 'col-lg-3 control-label')) !!} 
            <div class="col-lg-9"> {!! Form::select('religion', ['Islam', 'Christianity', 'Hinduism', 'Buddhism', 'Confucianism', 'Other']) !!} 
                <div class="text-danger">{!! $errors->first('religion') !!}</div> 
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
            {!! Form::label('expertise', 'Expertise', array('class' => 'col-lg-3 control-label')) !!} 
            <div class="col-lg-9"> {!! Form::select('expertise', ['IT', 'Management', 'Marketing']) !!} 
                <div class="text-danger">{!! $errors->first('expertise') !!}</div> 
            </div> 
            <div class="clear"></div> 
        </div>

    <div class="form-group"> 
            {!! Form::label('experience', 'Experience', array('class' => 'col-lg-3 control-label')) !!} 
            <div class="col-lg-9"> {!! Form::select('experience', ['1 year', '2 year', '3 year', '>3 year']) !!} 
                <div class="text-danger">{!! $errors->first('experience') !!}</div> 
            </div> 
            <div class="clear"></div> 
        </div> --}}
    
