@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <div class="row">
            @foreach ($category->products_limit as $product)
            <div class="col-3">
                <h3>{{ $product->name }}</h3>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
@endsection