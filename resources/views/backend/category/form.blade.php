@csrf
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">@lang('category.name')</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="@lang('category.name')" value="{{ old('name') ?? $category->name }}" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">@lang('category.description')</label>
    <div class="col-sm-10">
        <textarea rows="3" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="@lang('category.description')">{{ old('description') ?? $category->description }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
