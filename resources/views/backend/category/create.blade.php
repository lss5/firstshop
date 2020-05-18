@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2>@lang('category.title_create_view')</h2>
    <form action="{{ route('admin.category.store') }}" method="POST" class="my-2">
        <button type="submit" class="btn btn-success">@lang('category.create')</button>
        <a class="btn btn-danger" href="{{ route('admin.category.index') }}">@lang('category.cancel')</a>
        <hr/>
        @include('backend.category.form')
        <hr/>
    </form>
</div>
@endsection