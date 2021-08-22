@extends('master')
@section('content')

     <div class="container pt-3">
           <div class="row">
                <div class="col-md-11"></div>
               <div class="col-md-1"><a href="/" class="btn btn-info">Back</a></div>
           </div>
              <div class="row"> 
                    <div class="col-md-6">
                        <img src="{{$product['galary']}}" alt="" height="400" width="400">
                    </div>
 
                    <div class="col-md-6">
                        <h3> Name: {{$product['name']}}</h3>
                        <h5> Category: {{$product['category']}}</h5>
                        <h6> Description: {{$product['description']}}</h6>
                        <h6> Rs: {{$product['price']}}</h6>
                          <form action="/addtocart" method="POST">
                              <input type="hidden" name="product_id" value="{{$product['id']}}">
                              @csrf
                            <button type="submit" name="" id="" class="btn btn-primary" >Add to Cart</button>
                          </form>
                        </br>
                        <button type="button" name="" id="" class="btn btn-success" >Buy Now</button>
                    </div>
              </div>

     </div>
  
   
@endsection