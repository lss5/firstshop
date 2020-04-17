@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2 class="my-2">@lang('product.title_edit_view')</h2>
    <form action="{{ route('admin.product.update', ['product' => $product]) }}" method="POST" class="py-2">
        @method('put')
        @include('backend.product.form')
        <button type="submit" class="btn btn-success">@lang('product.save')</button>
    </form>
</div>
@endsection