<div class="contact-form">
    @if (session()->has('message'))
    <div class="col-md-12 alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form wire:submit.prevent="submit" >
        <div class="row">
            @if ($service)
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <input type="text" readonly wire:model.defer="contact.service" name="service" id="service"  class="form-control {{ $errors->has('contact.service') ? 'is-invalid' : '' }}" value="">
                    @error('contact.service') <div class="text-red ml-md-2"> {{ str_replace('contact.', '', $message) }} </div>  @enderror

                </div>
            </div>
            @endif
            <div class="col-lg-6 col-md-6">
                <div class="form-group">

                    <input type="text" wire:model.defer="contact.name" wire name="name" id="name" class="form-control {{ $errors->has('contact.name') ? 'is-invalid' : '' }} " required data-error="Please enter your name" placeholder="Name">
                    @error('contact.name') <div class="text-red ml-md-2"> {{ str_replace('contact.', '', $message) }} </div>  @enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <input  type="email" wire:model.defer="contact.email" name="email" id="email" class="form-control {{ $errors->has('contact.email') ? 'is-invalid' : '' }}" required data-error="Please enter your email" placeholder="Email">
                    @error('contact.email') <div class="text-red ml-md-2"> {{ str_replace('contact.', '', $message) }} </div>  @enderror

                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <input type="text" wire:model.defer="contact.phone" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control {{ $errors->has('contact.phone') ? 'is-invalid' : '' }}" placeholder="Phone">
                    @error('contact.phone') <div class="text-red ml-md-2"> {{ str_replace('contact.', '', $message) }} </div>  @enderror

                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <input type="text" wire:model.defer="contact.phone" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control {{ $errors->has('contact.phone') ? 'is-invalid' : '' }}" placeholder="Phone">
                    @error('contact.phone') <div class="text-red ml-md-2"> {{ str_replace('contact.', '', $message) }} </div>  @enderror

                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <textarea wire:model.defer="contact.message" name="message" class="form-control {{ $errors->has('contact.message') ? 'is-invalid' : '' }}" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                    {{ $errors->has('contact.message') ? 'is-invalid' : '' }}
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                    <button wire:loading.remove wire:click.prevent="submit" name="save" value="save" type="submit"
                    class="default-btn">    @if ($service)  Book Service @else Send Message  @endif
                    </button>
                    <button wire:loading.table class="default-btn"
                     type="button" disabled style="display: none">   <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                     @if ($service)  Book Service @else Send Message  @endif
                    </button>
            </div>
        </div>
    </form>
</div>
