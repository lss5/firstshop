@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2>@lang('product.title_create_view')</h2>
    <hr/>
    <form action="{{ route('admin.product.store') }}" method="POST" class="my-2">
        @include('backend.product.form')
        <hr/>
        <button type="submit" class="btn btn-success">@lang('product.create')</button>
        <a class="btn btn-danger" href="{{ route('admin.product.index') }}">@lang('product.cancel')</a>
    </form>
</div>
@endsection