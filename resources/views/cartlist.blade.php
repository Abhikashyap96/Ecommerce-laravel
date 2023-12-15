@extends('master')
@section("content")

<div class="custom-product">
  <div class="col-sm-10">
    <div class="trending-wrapper">
      <h4> Result for Cart-Products</h4>
      <a class="btn btn-success" href="ordernow">Order Now</a>
      @foreach ($products as $item)
      <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
            <img class="trending-img" src="{{$item->gallery}}">

          </a>
        </div>
        <div class="col-sm-4">
          <a href="detail/{{$item->id}}">

            <div class="">
              <h3>{{$item->name}}</h3>
              <h5>{{$item->discription}}</h5>
            </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
        </div>
      </div>
      @endforeach
      <a class="btn btn-success" href="ordernow">Order Now</a>
    </div>
  </div>
</div>
@endsection