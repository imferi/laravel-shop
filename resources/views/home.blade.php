@extends('layouts.app')


@section('content')
    <main id="main">
        <div class="container">
            <h1 class="visually-hidden">جدیدترین محصولات</h1>


            <div class="product-list-container">
                <div class="product-list">
                    @foreach($products as $product)

                        <div class="product-list-thumb">
                            <a href="{{route('product.show', $product)}}"
                               class="post-list-link">
                                <div class="product-list-thumb-container">
                                    <figure class="product-list-image-container">
                                        <div class="image-wrapper">
                                            <img alt="" class="product-list-image image-wide"
                                                 src="{{asset($product->image)}}">
                                        </div>
                                    </figure>
                                </div>
                                <div class="product-list-thumb-info">
                                    <div class="product-list-thumb-info-headers">
                                        <div class="product-list-thumb-name">{{$product->name}}</div>
                                        <div class="product-list-thumb-price">
                                            <span class="currency_sign"> تومان </span>
                                            {{$product->price}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach
                </div>
            </div>

        </div>
    </main>
@endsection



