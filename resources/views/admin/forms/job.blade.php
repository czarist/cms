@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')

    @if (${$resource} !== null)
        @include('partials.admin.form.number', ['attribute' => 'order'])
    @endif

    @include('partials.admin.form.boolean', [
        'attribute' => 'current_company',
    ])

    @foreach (['title', 'company', 'responsibilities'] as $a)
        @include('partials.admin.form.text', ['attribute' => $a])
    @endforeach

    @foreach (['date_init', 'date_end'] as $d)
        @include('partials.admin.form.date', ['attribute' => $d])
    @endforeach

    @include('partials.admin.form.file', ['attribute' => 'company_image'])

    @include('partials.admin.form.submit')

    @php $value = (${$resource}->current_company ?? old('current_company')) @endphp

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentCompanyYes = document.getElementById('current_company_yes');
            const currentCompanyNo = document.getElementById('current_company_no');
            const dateEndInput = document.getElementById('date_end');
            const isCurrentJob = "{{ $value }}";
            currentCompanyYes.addEventListener('change', function() {
                if (this.checked) {
                    dateEndInput.disabled = true;
                    dateEndInput.value = null;
                }
            });

            if (isCurrentJob == 1) {
                dateEndInput.disabled = true;
                dateEndInput.value = null;
            }

            currentCompanyNo.addEventListener('change', function() {
                if (this.checked) {
                    dateEndInput.disabled = false;
                }
            });
        });
    </script>
@endsection
