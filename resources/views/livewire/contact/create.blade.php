<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contact.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.contact.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="contact.name">
        <div class="validation-message">
            {{ $errors->first('contact.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.email') ? 'invalid' : '' }}">
        <label class="form-label required" for="email">{{ trans('cruds.contact.fields.email') }}</label>
        <input class="form-control" type="text" name="email" id="email" required wire:model.defer="contact.email">
        <div class="validation-message">
            {{ $errors->first('contact.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.phone') ? 'invalid' : '' }}">
        <label class="form-label required" for="phone">{{ trans('cruds.contact.fields.phone') }}</label>
        <input class="form-control" type="text" name="phone" id="phone" required wire:model.defer="contact.phone">
        <div class="validation-message">
            {{ $errors->first('contact.phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.message') ? 'invalid' : '' }}">
        <label class="form-label" for="message">{{ trans('cruds.contact.fields.message') }}</label>
        <input class="form-control" type="text" name="message" id="message" wire:model.defer="contact.message">
        <div class="validation-message">
            {{ $errors->first('contact.message') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.message_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact.service') ? 'invalid' : '' }}">
        <label class="form-label" for="service">{{ trans('cruds.contact.fields.service') }}</label>
        <input class="form-control" type="text" name="service" id="service" wire:model.defer="contact.service">
        <div class="validation-message">
            {{ $errors->first('contact.service') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contact.fields.service_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>