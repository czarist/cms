<label class="label">{{ __('admin.fields.' . $resource . '.' . $attribute) }}</label>
<div class="checkbox-content">
    @foreach ($categories as $category)
        <div class="field">
            <label class="checkbox-label">
                <input type="checkbox" name="categories[]" value="{{ $category['id'] }}"
                    {{ $category['selected'] ? 'checked' : '' }}>
                {{ $category['title'] }}
            </label>
        </div>
    @endforeach
</div>

<input type="hidden" id="{{ $attribute }}" name="{{ $attribute }}" value="">

<script>
    document.addEventListener("DOMContentLoaded", function() {
        function updateJson() {
            var checkboxes = document.querySelectorAll('input[name="categories[]"]:checked');
            var selectedValues = Array.from(checkboxes).map(function(checkbox) {
                return checkbox.value;
            });
            var jsonData = JSON.stringify(selectedValues);
            document.getElementById("{{ $attribute }}").value = jsonData;
        }

        var checkboxes = document.querySelectorAll('input[name="categories[]"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener("change", updateJson);
        });

        updateJson();
    });
</script>

<style>
    .form-container {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .field {
        margin-bottom: 15px;
    }

    .checkbox-label {
        display: flex;
        align-items: center;
    }

    .checkbox-label input[type="checkbox"] {
        margin-right: 10px;
    }
</style>
