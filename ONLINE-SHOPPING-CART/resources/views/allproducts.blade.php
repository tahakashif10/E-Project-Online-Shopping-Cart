@extends('layout')
@section('content')
<div class="container">
        <h3>All Products</h3>
        <hr>
        @if(@session('message'))
        <div
            class="alert alert-success"
            role="alert"
        >
            <strong>Alert</strong>
            <p>Items has been added</p>
        </div>
        
        @endif
        <div class="row">
            @foreach($prod as $p)
            <div class="col-lg-3">
                <div
                    class="card border-primary"
                >
                    <img class="card-img-top" src="uploads/{{$p->productimage}}" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">{{$p->productname}}</h4>
                        <p class="card-text">{{$p->productprice}}</p>
                        <p>{{$p->productquantity}}</p>
                        
                        <form action="/addtocart/{{$p->id}}" method="get">
                            <input class="w-100" type="number" name="quantity" placeholder="Enter quantity">
                        <br>
                            @CSRF
                         <button type="submit" class="btn btn-md text-light bg-primary mt-2 w-100">Buy Now</button>

                        </form>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
       </div>
@endsection