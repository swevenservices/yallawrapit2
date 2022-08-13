<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('service.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.service.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="service.title">
        <div class="validation-message">
            {{ $errors->first('service.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.excerpt') ? 'invalid' : '' }}">
        <label class="form-label required" for="excerpt">{{ trans('cruds.service.fields.excerpt') }}</label>
        <input class="form-control" type="text" name="excerpt" id="excerpt" required wire:model.defer="service.excerpt">
        <div class="validation-message">
            {{ $errors->first('service.excerpt') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.excerpt_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.slug') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('cruds.service.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" required wire:model.defer="service.slug">
        <div class="validation-message">
            {{ $errors->first('service.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.content') ? 'invalid' : '' }}">
        <label class="form-label required" for="content">{{ trans('cruds.service.fields.content') }}</label>
        <textarea class="form-control" name="content" id="content" required wire:model.defer="service.content" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('service.content') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.content_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.meta_title') ? 'invalid' : '' }}">
        <label class="form-label" for="meta_title">{{ trans('cruds.service.fields.meta_title') }}</label>
        <input class="form-control" type="text" name="meta_title" id="meta_title" wire:model.defer="service.meta_title">
        <div class="validation-message">
            {{ $errors->first('service.meta_title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.meta_title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.meta_content') ? 'invalid' : '' }}">
        <label class="form-label" for="meta_content">{{ trans('cruds.service.fields.meta_content') }}</label>
        <input class="form-control" type="text" name="meta_content" id="meta_content" wire:model.defer="service.meta_content">
        <div class="validation-message">
            {{ $errors->first('service.meta_content') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.meta_content_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.meta_description') ? 'invalid' : '' }}">
        <label class="form-label" for="meta_description">{{ trans('cruds.service.fields.meta_description') }}</label>
        <input class="form-control" type="text" name="meta_description" id="meta_description" wire:model.defer="service.meta_description">
        <div class="validation-message">
            {{ $errors->first('service.meta_description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.meta_description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('service.status') ? 'invalid' : '' }}">
        <label class="form-label" for="status">{{ trans('cruds.service.fields.status') }}</label>
        <input class="form-control" type="checkbox" name="status" id="status" wire:model.defer="service.status">
        <div class="validation-message">
            {{ $errors->first('service.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.service_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.service.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.services.storeMedia') }}" collection-name="service_image" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.service_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('projects') ? 'invalid' : '' }}">
        <label class="form-label" for="projects">{{ trans('cruds.service.fields.projects') }}</label>
        <x-select-list class="form-control" id="projects" name="projects" wire:model="projects" :options="$this->listsForFields['projects']" multiple />
        <div class="validation-message">
            {{ $errors->first('projects') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.service.fields.projects_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>