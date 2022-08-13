@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.service.title_singular') }}:
                    {{ trans('cruds.service.fields.id') }}
                    {{ $service->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.id') }}
                            </th>
                            <td>
                                {{ $service->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.title') }}
                            </th>
                            <td>
                                {{ $service->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.excerpt') }}
                            </th>
                            <td>
                                {{ $service->excerpt }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.slug') }}
                            </th>
                            <td>
                                {{ $service->slug }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.content') }}
                            </th>
                            <td>
                                {{ $service->content }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.meta_title') }}
                            </th>
                            <td>
                                {{ $service->meta_title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.meta_content') }}
                            </th>
                            <td>
                                {{ $service->meta_content }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.meta_description') }}
                            </th>
                            <td>
                                {{ $service->meta_description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.status') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $service->status ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.image') }}
                            </th>
                            <td>
                                @foreach($service->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.service.fields.projects') }}
                            </th>
                            <td>
                                @foreach($service->projects as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('service_edit')
                    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection