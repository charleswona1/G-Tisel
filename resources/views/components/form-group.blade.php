<div class="form-group {{ isset($class) ? $class : '' }}"
    @if (isset($id))id="{{ $id }}"@endif
    @if (isset($style))style="{{ $style }}"@endif
>
    @if (isset($label))
        <label @if (isset($name))for="{{ $name }}"@endif class="mg">
            {{ $label }}
            @if (isset($optionnal) && !!$optionnal)
                <small class="text-muted font-light">
                    (facultatif)
                </small>
            @endif

        </label>
    @endif

    @if (isset($slot))
        {{ $slot }}
    @endif
</div>