@csrf
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">@lang('product.name')</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="@lang('product.name')" value="{{ old('name') ?? $product->name }}" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">@lang('product.description')</label>
    <div class="col-sm-10">
        <textarea rows="3" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="@lang('product.description')">{{ old('description') ?? $product->description }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="categories" class="col-sm-2 col-form-label">@lang('product.categories')</label>
    <div class="col-sm-10">
        <select multiple class="form-control" id="categories[]" name="categories[]">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    @if (old('categories')){{ in_array($category->id, old('categories')) ? 'selected' : '' }}
                    @elseif ( $product->categories->pluck('id')->all() ){{ in_array($category->id, $product->categories->pluck('id')->all()) ? 'selected' : '' }} @endif
                    >{{ $category->name }}</option>
            @endforeach
        </select>
        @error('categories')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="price" class="col-sm-2 col-form-label">@lang('product.price')</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="@lang('product.price')" value="{{ old('price') ?? $product->price }}">
        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">@lang('product.image')</label>
    <div class="col-sm-10">
        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">
        @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="price" class="col-sm-2 col-form-label">@lang('product.active')</label>
    <div class="col-sm-10">
        <input type="checkbox" class="form-control" name="active" value="1" @if (old('active') ?? $product->active == 1) checked="checked" @endif >
        @error('active')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>