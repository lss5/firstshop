@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container py-4">
        @foreach ($categories as $category)
            @if ($category->products_limit->count() > 0)
                <h2>{{ $category->name }}</h2>
                <div class="row mb-4">
                    @foreach ($category->products_limit as $product)
                    <div class="col-xs-12 col-md-6 col-lg-3 p-3 p-md-2 p-lg-2">
                        <div class="card">
                            <p class="h4 m-3"><span class="badge badge-success">@lang('product.in_stock')</span></p>
                            <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                                <a href="{{ route('product',['category' => $category, 'product' => $product]) }}" class="btn btn-warning">@lang('product.more_info')</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>
@endsection