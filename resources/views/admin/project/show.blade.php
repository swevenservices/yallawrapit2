@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.project.title_singular') }}:
                    {{ trans('cruds.project.fields.id') }}
                    {{ $project->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.project.fields.id') }}
                            </th>
                            <td>
                                {{ $project->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.project.fields.title') }}
                            </th>
                            <td>
                                {{ $project->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.project.fields.excerpt') }}
                            </th>
                            <td>
                                {{ $project->excerpt }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.project.fields.slug') }}
                            </th>
                            <td>
                                {{ $project->slug }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.project.fields.before_image') }}
                            </th>
                            <td>
                                @foreach($project->before_image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.project.fields.after_image') }}
                            </th>
                            <td>
                                @foreach($project->after_image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('project_edit')
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection