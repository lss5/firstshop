@extends('backend.layouts.app')

@section('content')
<div class="container">
    <h2 class="my-2">@lang('category.title_show_view'): {{ $category->name }}</h2>
    <hr/>
    <div class="row my-2">
        <div class="col-sm-2">@lang('category.name')</div>
        <div class="col-sm-10">{{ $category->name }}</div>
    </div>
    <div class="row my-2">
        <div class="col-sm-2">@lang('category.description')</div>
        <div class="col-sm-10">{{ $category->description }}</div>
    </div>
    <hr/>
    <a class="btn btn-warning" href="{{ route('admin.category.index') }}">@lang('category.back')</a>
</div>
@endsection