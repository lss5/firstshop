@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2>@lang('product.title_create_view')</h2>
    <form action="{{ route('admin.product.store') }}" method="POST" class="my-2">
        @include('backend.product.form')
        <button type="submit" class="btn btn-success">@lang('product.create')</button>
    </form>
</div>
@endsection