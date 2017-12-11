<div class="content">
    <br>
    <div class="col-md-12 text-center"><p style="font-size: 21px;">New Components<br></p></div>
    <div class="col-md-10 col-md-offset-1">
    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
      <div class="carousel-inner" style="padding-left: 50px;padding-right: 50px;">
            @foreach ($new_components as $i => $newcomponent)
                <div class="item{{ ($i) ? '' : ' active' }}">

               
                    
                       <a href="#">
                        <center>
                            <img src="{{ asset('upload/component/image/' .$newcomponent->component_image) }}" alt="new component" width="360px" height="250px">
                        </center>
                        </a>
                       <span class="text-center">
                           <p>{{ substr(strip_tags($newcomponent->component_name), 0, 35) }}
                            {{ strlen(strip_tags(ucfirst($newcomponent->component_name))) > 35 ? '...' : "" }}
                        </p>
                       </span>
                 
                </div>
                
            @endforeach
          
               

        </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-arrow-right"></i></a>
    </div>
    </div>

</div>