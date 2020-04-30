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
        <div class="col-sm-10">
            @if ($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" alt="..." class="img-thumbnail">
            @else
                @lang('product.no_image')
            @endif
        </div>
    </div>
    <hr/>
    <form action="{{ route('admin.product.destroy', ['product' => $product ]) }}" method="POST" onsubmit="return confirm('Delete it?')">
        @csrf
        @method('delete')
        <a class="btn btn-warning" href="{{ route('admin.product.index') }}">@lang('product.back')<i class="fa fa-undo ml-1" aria-hidden="true"></i></a>
        <a class="btn btn-warning" href="{{ route('admin.product.edit', ['product' => $product]) }}">@lang('product.edit')<i class="fa fa-pencil ml-1"></i></a>
        <button type="submit" class="btn btn-danger">@lang('product.delete')<i class="fa fa-trash ml-1"></i></button>
    </form>
</div>
@endsection