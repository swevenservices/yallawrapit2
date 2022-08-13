@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.post.title_singular') }}:
                    {{ trans('cruds.post.fields.id') }}
                    {{ $post->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.id') }}
                            </th>
                            <td>
                                {{ $post->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.title') }}
                            </th>
                            <td>
                                {{ $post->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.excerpt') }}
                            </th>
                            <td>
                                {{ $post->excerpt }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.slug') }}
                            </th>
                            <td>
                                {{ $post->slug }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.image') }}
                            </th>
                            <td>
                                @foreach($post->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.content') }}
                            </th>
                            <td>
                                {{ $post->content }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.status') }}
                            </th>
                            <td>
                                {{ $post->status_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.meta_title') }}
                            </th>
                            <td>
                                {{ $post->meta_title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.meta_description') }}
                            </th>
                            <td>
                                {{ $post->meta_description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.meta_content') }}
                            </th>
                            <td>
                                {{ $post->meta_content }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.catgeory') }}
                            </th>
                            <td>
                                @if($post->catgeory)
                                    <span class="badge badge-relationship">{{ $post->catgeory->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.tags') }}
                            </th>
                            <td>
                                @foreach($post->tags as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('post_edit')
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection