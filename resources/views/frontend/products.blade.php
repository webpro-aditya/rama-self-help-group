@extends('layouts.user_type.guest')

@section('page_title', __('Products'))

@section('content')
<style>
    .product-grid {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .product-grid .price {
        color: #fff !important;
    }
    .checkout_btn {
        background: #635BFF !important;
    }
</style>

<div class="container">
    <h3 class="h3">Our Products</h3>
    <div class="row">
            @forelse ($products as $product)
                <div class="col-md-3 col-sm-6 mt-4">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#">
                                <img class="pic-1" src="{{ asset('front/'. $product->image ) }}" alt="{{ $product->name }}">
                            </a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{ $product->name }}</a></h3>
                            <a href="{{ route('front.checkout', [encrypt($product->id)]) }}" class="btn checkout_btn">
                                <div class="price">Rs {{ $product->price }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
          @empty
            <div class="col-md-12">No Products found</div>
          @endforelse
    </div>
</div>

@endsection

@section('front-footer')

@endsection