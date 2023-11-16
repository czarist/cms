<div class="field">
    <div class="file is-large has-name">
        <label class="file-label">
            <input class="file-input" type="file" id="{{ $attribute }}-file" name="{{ $attribute }}-update">
            <div class="file-cta">
                <div class="file-icon">{!! icon('upload-cloud') !!}</div>
                <div class="file-label">Upload</div>
            </div>
            @if (isset(${$resource}->$attribute))
                <div class="file">
                    <img width="200" id="image-src" src="{{ ${$resource}->$attribute }}" alt="">
                </div>
            @else
                <div class="file-name is-hidden"></div>
                <div class="file">
                    <img width="200" id="image-src" src="" alt="">
                </div>
            @endif
        </label>
        <input type="hidden" id="{{ $attribute }}" name="{{ $attribute }}">
    </div>
</div>

<script>
    const fileInput = document.getElementById('{{ $attribute }}-file');
    const hiddenInput = document.getElementById('{{ $attribute }}');
    const image = document.getElementById('image-src');

    fileInput.addEventListener('change', function() {
        const selectedFile = fileInput.files[0];

        if (selectedFile) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const base64String = e.target.result;

                hiddenInput.value = base64String;
                image.src = base64String; 
            };

            reader.readAsDataURL(selectedFile);
        } else {
            hiddenInput.value = '';
            image.src = ''; 
        }
    });
</script>
