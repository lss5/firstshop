@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1>@lang('category.title')</h1>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">@lang('category.create')</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col" width="3%">@lang('category.edit')</th>
                    <th scope="col" width="20%">@lang('category.name')</th>
                    <th scope="col" width="60%">@lang('category.description')</th>
                    <th scope="col" width="10%">@lang('category.count_products')</th>
                    <th scope="col" width="3%">@lang('category.delete')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            <a href="{{ route('admin.category.edit', ['category' => $category]) }}">
                                <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                            </a>
                        </td>
                        <td scope="row"><a href="{{ route('admin.category.show', ['category' => $category]) }}">{{ $category->name }}</a></td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->products->count() }}</td>
                        </td>
                        <td>
                            <form action="{{ route('admin.category.destroy', ['category' => $category ]) }}" method="POST" onsubmit="return confirm('Delete it?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->render() }}
    </div>
@endsection