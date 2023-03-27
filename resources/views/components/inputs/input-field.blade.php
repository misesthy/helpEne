
<div class="form-group">
    @if ($label != '')
        <label for="{{ $for ?? '' }}">{{ $label }}</label>
    @endif
    <input {{ $attributes }} class="form-control" id="{{ $for ?? '' }}" type="text">
</div>
