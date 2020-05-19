@extends('backend.layouts.app')

@section('stylesheets')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector:'textarea#description',
            menubar: false
        });
    </script>
@endsection

@section('content')
<div class="container">
    <h2 class="my-2">@lang('product.title_edit_view'): {{ $product->name }}</h2>
    <form action="{{ route('admin.product.update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data" class="py-2">
        <button type="submit" class="btn btn-primary">@lang('product.save')</button>
        <a class="btn btn-danger" href="{{ route('admin.product.index') }}">@lang('product.cancel')</a>
        <hr/>
        @method('put')
        @include('backend.product._form')
        <hr/>
    </form>
</div>
@endsection