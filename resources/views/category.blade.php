@extends('layouts.master')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h1-block">
                    <h1></h1>
                    <h2 style="text-align: center;
                      font-weight: 300;
                      font-size: 20px;
                      padding-bottom: 1em"></h2>
                </div>
            </div>
        </div>
    </div>



    <div class="container" style="padding-bottom: 2em">
        <div class="row">


            <div class="col-12">
                <div class="h2-block">
                    <h2>Services</h2>
                </div>
                @foreach ($products as $product)
                    <div class="col-6 col-12-m">
                        <div class="category-space">
                            <div class="product-block">
                                <a class="link-category" href="{{ route('shop.show', $product->slug  ) }}">
                                    <img src="{{ asset('/img/'. $product->image) }}" alt="{{ $product->balise_alt }}" >
                                    <span class="card-text">{{ $product->price }}€</span>
                                </a>
                            </div>
                            <div class="category-text">
                                <p>{{ $product->title }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@stop


