@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('Sample Gallery') }}
                    {{ trans('global.list') }}
                </h6>

                @can('service_create')
                    <a class="btn btn-indigo" href="{{ route('admin.samplegallery.create') }}">
                        {{ trans('global.add') }} {{ trans('Sample Gallery') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('samplegallery.index')

    </div>
</div>
@endsection
