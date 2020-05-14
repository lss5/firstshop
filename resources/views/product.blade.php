@extends('layouts.app')

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
    <h1>{{ $product->name }}</h1>
    <div class="row">
        <div class="col-xs-12 col-md-6 py-3 py-md-0">
            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="img-thumbnail">
        </div>
        <div class="col-xs-12 col-md-6 py-3 py-md-0">
            {{ $product->description }}
        </div>
    </div>
</div>
@endsection