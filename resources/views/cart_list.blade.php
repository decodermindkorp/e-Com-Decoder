@extends('master')
@section('content')
    {{-- {{print($products) }} --}}

  

     <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-12 trandin-product ">
                <h3>Cart List</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 "> 
                <div class="">
                    <div class="row ">
                    @foreach ($product as $item)
                  
                        <div class="col-md-3 p-2">
                            <a href="detail/{{$item->id}}">
                                <img src="{{$item->galary}}" alt="Los Angeles" width="200" height="100">
                                <div class="p-2" >
                                  <h6 class="slidet-text">{{$item->name}}</h6>
                                  <h6 class="slidet-text">{{$item->description}}</h6>
                                  <h6 class="slidet-text">{{$item->price}}</h6>
                                </div>   
                              
                            </a>
                        </div>
                        
                        <div>
                          <a name="" id="" class="btn btn-primary" href="/removecart/{{$item->cart_id}}" role="button">Remove Item</a>
                        </div>
                   
                    @endforeach
            
                </div>
              </div>
            </div>
        </div>
     </div>
  
@endsection