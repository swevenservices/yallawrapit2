<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('project.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.project.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="project.title">
        <div class="validation-message">
            {{ $errors->first('project.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('project.excerpt') ? 'invalid' : '' }}">
        <label class="form-label required" for="excerpt">{{ trans('cruds.project.fields.excerpt') }}</label>
        <textarea class="form-control" name="excerpt" id="excerpt" required wire:model.defer="project.excerpt" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('project.excerpt') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.excerpt_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('project.slug') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('cruds.project.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" required wire:model.defer="project.slug">
        <div class="validation-message">
            {{ $errors->first('project.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.project_before_image') ? 'invalid' : '' }}">
        <label class="form-label" for="before_image">{{ trans('cruds.project.fields.before_image') }}</label>
        <x-dropzone id="before_image" name="before_image" action="{{ route('admin.projects.storeMedia') }}" collection-name="project_before_image" max-file-size="1" max-width="1920" max-height="1080" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.project_before_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.before_image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.project_after_image') ? 'invalid' : '' }}">
        <label class="form-label" for="after_image">{{ trans('cruds.project.fields.after_image') }}</label>
        <x-dropzone id="after_image" name="after_image" action="{{ route('admin.projects.storeMedia') }}" collection-name="project_after_image" max-file-size="1" max-width="1920" max-height="1080" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.project_after_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.after_image_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>