<div class="form-group">
    <label for="{{ $name }}"><strong>{{ strtoupper(str_replace("_", " ", $name)) }}</strong></label>
    <input type="{{ $type }}" class="form-control" id="{{ $name }}" placeholder="{{ strtoupper(str_replace("_", " ", $placeholder)) }}" name="{{ $name }}" value="{{ $value }}" step="any" {{ $modifier }}>
</div>
