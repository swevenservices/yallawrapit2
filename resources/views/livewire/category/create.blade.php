<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('category.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.category.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="category.title">
        <div class="validation-message">
            {{ $errors->first('category.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.category.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('category.slug') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('cruds.category.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" required wire:model.defer="category.slug">
        <div class="validation-message">
            {{ $errors->first('category.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.category.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('category.status') ? 'invalid' : '' }}">
        <label class="form-label" for="status">{{ trans('cruds.category.fields.status') }}</label>
        <input class="form-control" type="checkbox" name="status" id="status" wire:model.defer="category.status">
        <div class="validation-message">
            {{ $errors->first('category.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.category.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>