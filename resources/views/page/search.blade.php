@extends('master')
@section('content')
@foreach($product as $new)
@if(isset($new))
<div class="cart-item">
	<div class="media">
    <div class="media-body">
    <span class="cart-item-title">{{$new->id}}</span>
		<span class="cart-item-title">{{$new->name}}</span>
		<span class="cart-item-options">{{$new->unit_price}}</span>
    <span class="cart-item-title">{{$new->promotion_price}}</span>
    <span class="cart-item-title">{{$new->image}}</span>
    <span class="cart-item-title">{{$new->unit}}</span>
   </div>
  </div>
</div>
@endif
@endforeach
@endsection