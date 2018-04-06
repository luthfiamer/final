{{--  this will be the css file referrence  --}}
<link rel="stylesheet" href="{{ URL::asset('css/carotheme.css') }}" />

{{--  below is the carousel  --}}
<div class="container">
      
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="https://rdln.files.wordpress.com/2015/08/a-fairly-typical-open-office.jpg" alt="office01" style="width:100%;">
              <div class="carousel-caption">Office 01</div>
            </div>
      
            <div class="item">
              <img src="https://images.freeimages.com/images/large-previews/bfd/training-room-1-1546126.jpg" alt="office02" style="width:100%;">
              <div class="carousel-caption">Office 02</div>
            </div>
          
            <div class="item">
              <img src="https://previews.123rf.com/images/auremar/auremar1203/auremar120300085/12499770-disabled-businessman-smiling-in-office.jpg" alt="office03" style="width:100%;">
              <div class="carousel-caption">Office 03</div>
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>