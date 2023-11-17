<div class="field">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
    <div class="control">
        @php $value = (${$resource}->$attribute ?? old($attribute)) @endphp
        <input class="input-color {{ $class ?? '' }}" value="{{ empty($value) ? $default ?? '' : $value }}"
            type="color" name="{{ $attribute }}">
    </div>
</div>
<style>

</style>