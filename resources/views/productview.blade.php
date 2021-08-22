@extends('master')
@section('content')
    {{-- {{print($products) }} --}}

     <div class="container pt-3">
              <div class="row"> 
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                      <li data-target="#demo" data-slide-to="3"></li>
                      <li data-target="#demo" data-slide-to="4"></li>
                    </ul>
                    <div class="carousel-inner">
                    
                          @foreach ($products as $item)
                          <div class="carousel-item {{$item['id']==1?'active':''}}">
                           <a href="detail/{{$item['id']}}">
                            <img src="{{$item['galary']}}" alt="Los Angeles" width="1100" height="500">
                            <div class="carousel-caption ">
                              <h3 class="slidet-text">{{$item['name']}}</h3>
                              <p class="slidet-text">{{$item['description']}}</p>
                            </div> 
                           </a>        
                          </div>
                          @endforeach
                  
                   
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>
              </div>

     </div>

     <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-12 trandin-product ">
                <h3>Tranding Product</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ">
                <div class="">
                    <div class="row ">
                    @foreach ($products as $item)
                  
                        <div class="col-md-3 p-2">
                            <a href="detail/{{$item['id']}}">
                                <img src="{{$item['galary']}}" alt="Los Angeles" width="200" height="100">
                                <div class="p-2" >
                                  <h6 class="slidet-text">{{$item['name']}}</h6>
                                </div>   
                              
                            </a>
                        </div>
                   
                   
                    @endforeach
            
                </div>
              </div>
            </div>
        </div>
     </div>
  
@endsection