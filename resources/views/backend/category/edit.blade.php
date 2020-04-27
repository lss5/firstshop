@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2 class="my-2">@lang('category.title_edit_view'): {{ $category->name }}</h2>
    <hr/>
    <form action="{{ route('admin.category.update', ['category' => $category]) }}" method="POST" class="py-2">
        @method('put')
        @include('backend.category.form')
        <hr/>
        <button type="submit" class="btn btn-success">@lang('category.save')</button>
        <a class="btn btn-danger" href="{{ route('admin.category.index') }}">@lang('category.cancel')</a>
    </form>
</div>
@endsection