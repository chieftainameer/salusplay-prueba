
<div class="form-group row">
    <label class="col-md-3 col-form-label" for="{{$inputName}}">
        @lang("$inputLabel") @if($required) * @endif
    </label>
    <div @if($size) class="{{$size}}" @else class="col-md-9" @endif>
        <select
                @if(isset($disable))
                disabled
                @endif
                class="form-control @isset($class){{$class}}@endisset"
                name="{{$inputName}}"
                id="{{ $id }}"
                @if($required) required @endif
        >
            @if(isset($selectType) && $selectType === 'simple' )
                <option value="" selected @if($required) disabled @endif>Select an option</option>
                @foreach($options as $key => $option)
                    <option value="{{ $key }}" @isset($model) @if($model->{$inputName} == $key) selected @endif @endisset >{{$option}}</option>
                @endforeach
            @else
                <option value="" selected @if($required) disabled @endif>Select an option</option>

                @foreach($options as $option)
                    <option value="{{ $option->{$optionValue} }}" @if($option->{$optionValue} == $optionSelected) selected @endif>{{ $option->{$optionName} }}</option>
                @endforeach

            @endif

        </select>
        @if(isset($infoMessage) && $infoMessage != "")
            <div class="small text-muted">{!! $infoMessage!!}</div>
        @endif
        @if($errors->has("$inputName"))
            <em class="text-danger">{!! $errors->first("$inputName") !!}</em>
        @endif
    </div>
    {{ $slot }}
</div>
