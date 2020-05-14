@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $category->name }}</h1>
    <div class="row">
        @forelse ($category->products as $product)
            <div class="col-xs-12 col-md-6 col-lg-3 p-3 p-md-2 p-lg-2">
                <div class="card">
                    <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                        <a href="{{ route('product', ['category' => $category, 'product' => $product]) }}" class="btn btn-warning">More Info</a>
                    </div>
                </div>
            </div>
        @empty
            <h2>@lang('category.empty')</h2>
        @endforelse
    </div>
</div>

@endsection