@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')
    @include('partials.admin.form.text', ['attribute' => 'title'])
    @include('partials.admin.form.file', ['attribute' => 'image'])
    @include('partials.admin.form.submit')
@endsection
