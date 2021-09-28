@extends('layouts.app')
{{--TODO--}}
@section('body-id', 'product-page')



@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="display:flex">
                <div class="w-30">
                    <div class="cart-details">
                        <h4>قیمت کل</h4>
                        <p>{{$cart->total_price}}<span>تومان</span></p>
                    </div>
                </div>
                <div class="w-70">
                    <div class="cart-items">
                        @foreach($cart->cartItems as $item)
                            <div class="cart-item">
                                <img src="{{$item->product->image}}" alt="{{$item->product->name}}" class="cart-item-image">
                                <a href="{{route('product.show',$item->product)}}"><p>{{$item->product->name}}</p></a>
                                <form action="{{route('cart.remove.product', $item->product)}}" method="post">
                                    @csrf
                                    <button type="submit">حذف</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



