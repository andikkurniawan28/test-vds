<div class="form-group">
    <label for="{{ $name }}"><strong>{{ strtoupper(str_replace("_", " ", $title)) }}</strong></label>
    <select name="{{ $name }}" class="form-control">
        @foreach ($data as $data)
            <option value="{{ $data->id }}"
                @if($feed == $data->id)
                    {{ "selected" }}
                @endif
            >{{ $data->{$item} }}</option>
        @endforeach
    </select>
</div>
