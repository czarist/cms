@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')

    @if (${$resource} !== null)
        @include('partials.admin.form.categories', [
            'attribute' => 'categories',
            'categories' => $project['categories'],
        ])
    @endif

    @foreach (['title', 'description_en', 'description_pt', 'url', 'subtitle', 'designer', 'designer-url', 'intermediary', 'intermediary-url', 'plataform'] as $a)
        @include('partials.admin.form.text', ['attribute' => $a])
    @endforeach
    @include('partials.admin.form.file', ['attribute' => 'icon'])
    @include('partials.admin.form.color', ['attribute' => 'hexabg'])

    @include('partials.admin.form.submit')
@endsection
