<div class="field">
    <label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
    <div class="control">
        <select class="input is-large {{ $class ?? '' }}" name="{{ $attribute }}">
            @foreach ($selectValues as $value)
                <option value="{{ $value }}" @if ($value == (${$resource}->$attribute ?? old($attribute))) selected @endif>
                    {{ ucfirst($value) }}</option>
            @endforeach
        </select>
    </div>
</div>
