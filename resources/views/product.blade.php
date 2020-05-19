@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="w-100" style="background-color: #e9ecef;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('category', ['category' => $category]) }}" class="text-secondary">{{ $category->name }}</a>
                </li>
                <li class="breadcrumb-item active text-muted" aria-current="page">{{ $product->name }}</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container py-4">
    <h1 class="mb-0">{{ $product->name }}</h1>
    <p class="h4"><span class="badge badge-success">@lang('product.in_stock')</span></p>
    <div class="row">
        <div class="col-md-6 col-xs-12 py-3 py-md-0">
            @if ($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" class="mg-thumbnail" alt="{{ $product->name }}">
            @else
                <img src="{{ asset('storage/products/default.jpg') }}" class="mg-thumbnail" alt="{{ $product->name }}">
            @endif
        </div>
        <div class="col-md-6 col-xs-12 py-3 py-md-0 pt-md-2 bg-white">
            <h2>@lang('product.description')</h2>
            {{ $product->description }}
        </div>
    </div>
</div>
@endsection