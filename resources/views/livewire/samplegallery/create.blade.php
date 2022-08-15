<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('samplegallery.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="samplegallery.name">
        <div class="validation-message">
            {{ $errors->first('samplegallery.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('samplegallery.description') ? 'invalid' : '' }}">
        <label class="form-label required" for="excerpt">{{ trans('description') }}</label>
        <textarea class="form-control" name="description" id="description" required wire:model.defer="samplegallery.description" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('samplegallery.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.excerpt_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('samplegallery.dimention') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('dimention') }}</label>
        <input class="form-control" type="text" name="dimention" id="dimention"  wire:model.defer="samplegallery.dimention">
        <div class="validation-message">
            {{ $errors->first('samplegallery.dimention') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.sample_image') ? 'invalid' : '' }}">
        <label class="form-label" for="before_image">{{ trans('Sample Image') }}</label>
        <x-dropzone id="sample_image" name="sample_image" action="{{ route('admin.samplegallery.storeMedia') }}" collection-name="sample_image" max-file-size="1" max-width="1920" max-height="1080" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.sample_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.before_image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.backslash_image') ? 'invalid' : '' }}">
        <label class="form-label" for="after_image">{{ trans('backslash image') }}</label>
        <x-dropzone id="backslash_image" name="backslash_image" action="{{ route('admin.samplegallery.storeMedia') }}" collection-name="backslash_image" max-file-size="1" max-width="1920" max-height="1080" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.backslash_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.after_image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.cabnet_image') ? 'invalid' : '' }}">
        <label class="form-label" for="after_image">{{ trans('cabnet image') }}</label>
        <x-dropzone id="cabnet_image" name="cabnet_image" action="{{ route('admin.samplegallery.storeMedia') }}" collection-name="cabnet_image" max-file-size="1" max-width="1920" max-height="1080" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.cabnet_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.after_image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.countertop_image') ? 'invalid' : '' }}">
        <label class="form-label" for="after_image">{{ trans('Countertop image') }}</label>
        <x-dropzone id="countertop_image" name="countertop_image" action="{{ route('admin.samplegallery.storeMedia') }}" collection-name="countertop_image" max-file-size="1" max-width="1920" max-height="1080" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.countertop_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.after_image_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.samplegallery.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
