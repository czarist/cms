@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')
    @foreach (['title', 'description'] as $a)
        @include('partials.admin.form.text', ['attribute' => $a])
    @endforeach

    @include('partials.admin.form.select', [
        'attribute' => 'type',
        'selectValues' => ['project', 'certification'],
    ])

    @include('partials.admin.form.submit')
@endsection
