@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2 class="my-2">@lang('product.title_edit_view'): {{ $product->name }}</h2>
    <hr/>
    <form action="{{ route('admin.product.update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data" class="py-2">
        @method('put')
        @include('backend.product.form')
        <hr/>
        <button type="submit" class="btn btn-success">@lang('product.save')</button>
        <a class="btn btn-danger" href="{{ route('admin.product.index') }}">@lang('product.cancel')</a>
    </form>
</div>
@endsection