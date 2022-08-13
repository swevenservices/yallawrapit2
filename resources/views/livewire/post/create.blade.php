<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('post.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.post.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="post.title">
        <div class="validation-message">
            {{ $errors->first('post.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.excerpt') ? 'invalid' : '' }}">
        <label class="form-label required" for="excerpt">{{ trans('cruds.post.fields.excerpt') }}</label>
        <textarea class="form-control" name="excerpt" id="excerpt" required wire:model.defer="post.excerpt" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('post.excerpt') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.excerpt_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.slug') ? 'invalid' : '' }}">
        <label class="form-label required" for="slug">{{ trans('cruds.post.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" required wire:model.defer="post.slug">
        <div class="validation-message">
            {{ $errors->first('post.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.slug_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.post_image') ? 'invalid' : '' }}">
        <label class="form-label" for="image">{{ trans('cruds.post.fields.image') }}</label>
        <x-dropzone id="image" name="image" action="{{ route('admin.posts.storeMedia') }}" collection-name="post_image" max-file-size="1" max-width="1920" max-height="1080" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.post_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.content') ? 'invalid' : '' }}">
        <label class="form-label" for="content">{{ trans('cruds.post.fields.content') }}</label>
        <textarea class="form-control" name="content" id="content" wire:model.defer="post.content" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('post.content') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.content_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.status') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.post.fields.status') }}</label>
        @foreach($this->listsForFields['status'] as $key => $value)
            <label class="radio-label"><input type="radio" name="status" wire:model="post.status" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('post.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.meta_title') ? 'invalid' : '' }}">
        <label class="form-label" for="meta_title">{{ trans('cruds.post.fields.meta_title') }}</label>
        <input class="form-control" type="text" name="meta_title" id="meta_title" wire:model.defer="post.meta_title">
        <div class="validation-message">
            {{ $errors->first('post.meta_title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.meta_title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.meta_description') ? 'invalid' : '' }}">
        <label class="form-label" for="meta_description">{{ trans('cruds.post.fields.meta_description') }}</label>
        <input class="form-control" type="text" name="meta_description" id="meta_description" wire:model.defer="post.meta_description">
        <div class="validation-message">
            {{ $errors->first('post.meta_description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.meta_description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.meta_content') ? 'invalid' : '' }}">
        <label class="form-label" for="meta_content">{{ trans('cruds.post.fields.meta_content') }}</label>
        <input class="form-control" type="text" name="meta_content" id="meta_content" wire:model.defer="post.meta_content">
        <div class="validation-message">
            {{ $errors->first('post.meta_content') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.meta_content_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.catgeory_id') ? 'invalid' : '' }}">
        <label class="form-label" for="catgeory">{{ trans('cruds.post.fields.catgeory') }}</label>
        <x-select-list class="form-control" id="catgeory" name="catgeory" :options="$this->listsForFields['catgeory']" wire:model="post.catgeory_id" />
        <div class="validation-message">
            {{ $errors->first('post.catgeory_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.catgeory_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('tags') ? 'invalid' : '' }}">
        <label class="form-label" for="tags">{{ trans('cruds.post.fields.tags') }}</label>
        <x-select-list class="form-control" id="tags" name="tags" wire:model="tags" :options="$this->listsForFields['tags']" multiple />
        <div class="validation-message">
            {{ $errors->first('tags') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.tags_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>