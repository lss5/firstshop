@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2 class="my-2">@lang('product.title_show_view'): {{ $product->name }}</h2>
    <hr/>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.name')</div>
        <div class="col-sm-10">{{ $product->name }}</div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.description')</div>
        <div class="col-sm-10">{{ $product->description }}</div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.price')</div>
        <div class="col-sm-10">{{ $product->price }}</div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.image')</div>
        <div class="col-sm-10">{{ $product->image }}</div>
    </div>
    <hr/>
    <a class="btn btn-warning" href="{{ route('admin.product.index') }}">@lang('product.back')</a>
</div>
@endsection