@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2 class="my-2">@lang('product.title_show_view'): {{ $product->name }}</h2>
    <form action="{{ route('admin.product.destroy', ['product' => $product ]) }}" method="POST" onsubmit="return confirm('Delete it?')">
        @csrf
        @method('delete')
        <a class="btn btn-primary" href="{{ route('admin.product.index') }}">@lang('product.back')<i class="fa fa-undo ml-1" aria-hidden="true"></i></a>
        <a class="btn btn-primary" href="{{ route('admin.product.edit', ['product' => $product]) }}">@lang('product.edit')<i class="fa fa-pencil ml-1"></i></a>
        <button type="submit" class="btn btn-danger">@lang('product.delete')<i class="fa fa-trash ml-1"></i></button>
    </form>
    <hr/>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.name')</div>
        <div class="col-sm-10 bg-white">{{ $product->name }}</div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.short_info')</div>
        <div class="col-sm-10 bg-white">{{ $product->short_info }}</div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.description')</div>
        <div class="col-sm-10 bg-white">{!! $product->description !!}</div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.price')</div>
        <div class="col-sm-10 bg-white">{{ $product->price }}</div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.image')</div>
        <div class="col-sm-10 bg-white">
            @if ($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" class="img-thumbnail">
            @else
                @lang('product.no_image')
            @endif
        </div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('product.file')</div>
        <div class="col-sm-10 bg-white py-2">
            @if ($product->file)
                <a class="btn btn-primary" href="{{ asset('storage/'.$product->file) }}" target="_blank">@lang('product.download')</a>
                <small class="form-text text-muted">{{ $product->file }}</small>
            @else
                @lang('product.no_file')
            @endif
        </div>
    </div>
    <hr/>
</div>
@endsection