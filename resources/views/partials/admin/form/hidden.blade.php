        @php $value = (${$resource}->$attribute ?? old($attribute)) @endphp
        <input class="input is-large {{ $class ?? '' }}" id="{{ $attribute }}"
            value="{{ empty($value) ? $default ?? '' : $value }}" type="hidden" name="{{ $attribute }}">
