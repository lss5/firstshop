@extends('layouts.app')

@section('content')
    <div class="container">
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