@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>{{ $category->name }}</h1>
    {{-- @if ($category->description) --}}
        <h6>{{ $category->description }}</h6>
    {{-- @endif --}}
    @if ($category->products_active->count() > 0)
        <div class="row">
        @foreach ($category->products_active as $product)
            <div class="col-xs-12 col-md-6 col-lg-3 py-3 py-md-2 py-lg-2">
                <div class="card">
                    <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                        <a href="{{ route('product', ['category' => $category, 'product' => $product]) }}" class="btn btn-warning">@lang('product.more_info')</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @else
        <h2>@lang('category.empty')</h2>
    @endif
</div>

@endsection