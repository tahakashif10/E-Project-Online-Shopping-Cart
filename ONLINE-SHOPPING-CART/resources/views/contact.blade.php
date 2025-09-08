@extends('layout')
@section('content')

<div style="background-color: blue;" class="container">
   <div class="row">
      <div class="col-lg-6">
         <form method="POST" action="">
            @csrf
            <div class="d-flex">
               <input style="border: 2px solid black;" type="name" name="firstname" placeholder="First Name" class="form-control m-2">
               <input style="border: 2px solid black;" type="name" name="lastname" placeholder="Last Name" class="form-control m-2">
            </div>
            <div >
               <input style="border: 2px solid black;" type="email" name="email" placeholder="Enter Your Email Here" class="form-control m-3">
               <input style="border: 2px solid black;" type="subject" name="subject" placeholder="Subject" class="form-control m-3">
               <textarea class="form-control m-3" name="message" id="message" placeholder="Message"></textarea>

            </div>
         </form>
      </div>

      <div class="col-lg-6">

         <img class="img-fluid" src="user/images/contactus.webp" alt="">

      </div>


   </div>
</div>
</div>

@endsection