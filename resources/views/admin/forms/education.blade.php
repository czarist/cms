@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')
    @include('partials.admin.form.select', [
        'attribute' => 'status_en',
        'selectValues' => ['completed', 'in progress', 'interrupted'],
    ])
    @include('partials.admin.form.hidden', ['attribute' => 'status_pt'])

    @foreach (['title', 'university_pt', 'university_en', 'course_pt', 'course_en'] as $a)
        @include('partials.admin.form.text', ['attribute' => $a])
    @endforeach

    @foreach (['date_init', 'date_end'] as $d)
        @include('partials.admin.form.date', ['attribute' => $d])
    @endforeach
    
    @include('partials.admin.form.submit')
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectStatusEn = document.getElementById('status_en');
        const inputStatusPt = document.getElementById('status_pt');

        selectStatusEn.addEventListener('change', function() {
            const selectedValue = selectStatusEn.value;

            const translations = {
                'completed': 'Concluído',
                'in progress': 'Em andamento',
                'interrupted': 'Interrompido'
            };

            inputStatusPt.value = translations[selectedValue];
        });

        selectStatusEn.dispatchEvent(new Event('change'));
    });
</script>
