@extends('layouts.app')

@section('title', $product->name)

@section('body-id', 'product-page')


@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="product-page">

                <div class="product-images">
                    <img alt="{{$product->name}}" class="product-image"
                         src="{{asset($product->image)}}">
                </div>


                <div class="product-page-info">
                    <div class="product-page-headings">
                        <h1 class="product-title has-dash">{{$product->name}}</h1>
                        <div class="product-price">
                            <span class="currency_sign">تومان</span>{{$product->price}}
                        </div>
                    </div>

                    <div class="product-details">
                        <div class="product-description">
                            {{$product->description }}
                        </div>
                        <div class="cta-button-container">
                            <form action="{{route('cart.add.product', $product)}}" method="post">
                                @csrf
                                {{--                            <div class="select">--}}
                                {{--                            <select name="size" id="size">--}}
                                {{--                                <option value="none">سایز مورد نظر خود را انتخاب کنید</option>--}}
                                {{--                                <option value="md">md</option>--}}
                                {{--                                <option value="xl">xl</option>--}}
                                {{--                                <option value="xxl">xxl</option>--}}
                                {{--                            </select>--}}
                                {{--                                <svg viewBox="0 0 15 7.6" enable-background="new 0 0 15 7.6"><path d="M15 1.1l-7.5 6.5-7.5-6.3 1-1.2 6.5 5.5 6.5-5.6z"></path></svg>--}}
                                {{--                            </div>--}}
                                <button class="cta-button" type="submit">افزودن به سبد خرید</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>
@endsection



