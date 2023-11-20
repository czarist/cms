@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')
    @foreach (['title', 'description', 'type'] as $a)
        @include('partials.admin.form.text', ['attribute' => $a])
    @endforeach
    @include('partials.admin.form.submit')
@endsection
