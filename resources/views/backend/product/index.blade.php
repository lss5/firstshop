@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1>@lang('product.title')</h1>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">@lang('product.create')</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col" width="3%" class="text-center">@lang('product.edit')</th>
                    <th scope="col" width="5%" class="text-center">@lang('product.status')</th>
                    <th scope="col" width="20%">@lang('product.name')</th>
                    <th scope="col" width="50%">@lang('product.description')</th>
                    <th scope="col" width="10%" class="text-center">@lang('product.categories')</th>
                    <th scope="col" width="10%" class="text-center">@lang('product.price')</th>
                    <th scope="col" width="3%" class="text-center">@lang('product.created_at')</th>
                    <th scope="col" width="3%" class="text-center">@lang('product.delete')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td scope="row">
                            <a href="{{ route('admin.product.edit', ['product' => $product]) }}">
                                <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                            </a>
                        </td>
                        <td class="text-center">
                            @if ($product->active == 1)
                                <i class="fa fa-check-circle-o text-success" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-ban text-danger" aria-hidden="true"></i>
                            @endif
                            @if ($product->image)
                                <i class="fa fa-picture-o text-success" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-camera text-danger" aria-hidden="true"></i>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.product.show', ['product' => $product]) }}">{{ $product->name }}</a>
                        </td>
                        <td>{{ Str::limit(strip_tags($product->description), 50) }}</td>
                        <td>{{ $product->categories()->pluck('name')->implode(', ') }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at->format('d/m/Y') }}</td>
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
        {{ $products->render() }}
    </div>
@endsection