@extends('master')
@section('content')
    
     <div class="container pt-5 ">
         <div class="row">
              <div class="col-md-5 offset-md-4 pb-2">
                <div class="login-text">
                  <h3>Login Now</h3>
                </div>
                 
              </div>
             <div class="col-md-4 offset-md-4">

                <form action="login" method="POST">
                    <div class="form-group">
                       @csrf
                      <label for="email">Email address:</label>
                      <input type="email" name="email"  class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                   
                    <button type="submit" class="btn btn-success">Login</button>
                  </form>

             </div>
         </div>
     </div>
  
@endsection