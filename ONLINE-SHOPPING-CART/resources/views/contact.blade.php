@extends('layout')
@section('content')

<div class="container">
   
      <form action="/contact" method="post">
         @csrf 
         <div class="row">
             <div class="col-6">
           <div class="d-flex">
            <input class="form-control p-1 m-3" type="text" name="firstname" placeholder="First Name">
            <input class="form-control p-1 m-3" type="text" name="lastname" placeholder="Last Name">
           </div>
           <div class="d-flex">
            <input class="form-control p-1 m-3" type="text" name="email" placeholder="User Email">
            <input class="form-control p-1 m-3" type="text" name="subject" placeholder="User Subject">
           </div>
            <div class="d-flex">
               <textarea class="form-control p-1 m-3" name="message" id="" placeholder="User Message"></textarea>
            </div>
             <div class="d-flex">
               <button type="submit" class="btn btn-success btn-md m-3 ">send</button>
            </div>
            
         </div>
         <div class="col-6">
            <img class="img-fluid" src="user/images/contactus.webp" alt="">
         </div>
         </div>
        
      </form>
   
</div>

@endsection