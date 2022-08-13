<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('tag.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.tag.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="tag.title">
        <div class="validation-message">
            {{ $errors->first('tag.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.tag.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('tag.slug') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('cruds.tag.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" required wire:model.defer="tag.slug">
        <div class="validation-message">
            {{ $errors->first('tag.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.tag.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('tag.status') ? 'invalid' : '' }}">
        <label class="form-label" for="status">{{ trans('cruds.tag.fields.status') }}</label>
        <input class="form-control" type="checkbox" name="status" id="status" wire:model.defer="tag.status">
        <div class="validation-message">
            {{ $errors->first('tag.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.tag.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.tags.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>