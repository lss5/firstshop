@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <div class="row mb-4">
            @foreach ($category->products_limit as $product)
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                        <a href="#" class="btn btn-warning">More Info</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
@endsection