@extends('admin.adminsidebar')
@section('admincontent')
<div class="container">
        <h3>All Products</h3>
        <hr>
        <div class="row">
            @foreach($prod as $p)
            <div class="col-lg-3">
                <div
                    class="card border-primary"
                >
                    <img class="card-img-top" src="uploads/{{$p->productimage}}" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title text-dark">{{$p->productname}}</h4>
                        <p class="card-text">{{$p->productprice}}</p>
                        <p>{{$p->productquantity}}</p>
                        <form action="/delete/{{$p->id}}" method="post">
                            @csrf
                            <button type='submit' class='btn btn-md btn-danger'>Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
       </div>
@endsection