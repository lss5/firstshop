@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1>@lang('product.title')</h1>
        <a href="{{ route('admin.product.create') }}" class="btn btn-success">@lang('product.create')</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col" width="20%">@lang('product.name')</th>
                    <th scope="col" width="60%">@lang('product.description')</th>
                    <th scope="col" width="10%">@lang('product.price')</th>
                    <th scope="col" width="3%">@lang('product.view')</th>
                    <th scope="col" width="3%">@lang('product.edit')</th>
                    <th scope="col" width="3%">@lang('product.delete')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td scope="row">{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('admin.product.show', ['product' => $product]) }}">
                                <button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.product.edit', ['product' => $product]) }}">
                                <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.product.destroy', ['product' => $product ]) }}" method="POST" onsubmit="return confirm('Delete it?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection