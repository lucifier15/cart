@extends('layouts.master')


@section('title','Golden_Lid/Cart')
@section('content')

@foreach($product->chunk(3) as $productChunk)
<div class="row">
  @foreach($productChunk as $product)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$product->imagePath}}" alt="...">
      <div class="caption">
        <h3>{{$product->title}}</h3>
        <p class="description">{{$product->description}}</p>
        <div class="clearfix">
        <div class="pull-left price">Rs{{$product->price}}</div>
          	<a href="{{ route('product.addToCart',['id'=>$product->id]) }}" class="btn btn-success pull-right" role="button">Add To Cart</a>
        </div>
      </div>
    </div>
  </div>

  
  @endforeach
  
</div>
@endforeach

@endsection