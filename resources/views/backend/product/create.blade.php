@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2>@lang('product.title_create_view')</h2>
    <form enctype="multipart/form-data" action="{{ route('admin.product.store') }}" method="POST" class="my-2">
        <button type="submit" class="btn btn-primary">@lang('product.create')</button>
        <a class="btn btn-danger" href="{{ route('admin.product.index') }}">@lang('product.cancel')</a>
        <hr/>
        @include('backend.product.form')
        <hr/>
    </form>
</div>
@endsection