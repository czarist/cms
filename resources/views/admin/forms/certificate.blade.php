@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')

    @if (${$resource} !== null)
        @include('partials.admin.form.categories', [
            'attribute' => 'categories',
            'categories' => $certificate['categories'],
        ])
    @endif

    @foreach (['title', 'subtitle', 'url'] as $a)
        @include('partials.admin.form.text', ['attribute' => $a])
    @endforeach
    @include('partials.admin.form.file', ['attribute' => 'icon'])
    @include('partials.admin.form.color', ['attribute' => 'hexabg'])

    @include('partials.admin.form.submit')
@endsection
