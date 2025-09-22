<div class="container">
    <div class="row">
        <h3>My Cart</h3>
    <hr>
    @foreach($product as $p)
    <img src="{{ asset('uploads/'.$p->productimage) }}" height="200px" width="150px" alt="">
    <hr>
    <hr>
    <p>{{$p->productname}}</p>
    <p>{{$p->productprice}}</p>
    <p>{{$p->productquantity}}</p>
    @endforeach
    </div>

</div>