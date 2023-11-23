<div class="field">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
    <div class="control">
        @php $value = (${$resource}->$attribute ?? old($attribute)) @endphp
        <label class="radio">
            <input type="radio" name="{{ $attribute }}" id="{{ $attribute }}_yes" value="1"
                {{ $value == 1 ? 'checked' : '' }}>
            Yes
        </label>
        <label class="radio">
            <input type="radio" name="{{ $attribute }}" id="{{ $attribute }}_no" value="0"
                {{ $value == 0 ? 'checked' : '' }}>
            No
        </label>
    </div>
</div>
