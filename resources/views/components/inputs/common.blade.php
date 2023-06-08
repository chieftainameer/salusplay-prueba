<div class="form-group row my-3">
    @if($inputLabel)
        <label class="col-md-3 col-form-label" for="{{$inputName}}">
            {{ $inputLabel }} @if($required) * @endif
        </label>
    @endif

    <div @if($inputWidth) class="{{$inputWidth}}" @else class="col-md-9" @endif>
        <input
                @if(isset($disable))
                disabled
                @endif
                @if($required) required @endif
                @if($size) class="w-25 form-control" @else class="form-control" @endif
                type="{{$inputType}}"
                @if($maxLength) maxlength="{{$maxLength}}" @endif
                @if($max) max="{{$max}}" @endif
                @if($size) size="{{$size}}" @endif
                name="{{$inputName}}"
                @if($pattern) pattern="{{ $pattern }}" @endif
                @if($placeholder) placeholder="{{ $placeholder }}" @endif
                id="{{$inputName}}"
                value="{{old("$inputName",isset($model) && $model->{$inputName}  ? $model->{$inputName} : null )}}"
        >

        @if(isset($infoMessage) && $infoMessage != "")
            <div class="small text-muted">{{ $infoMessage }}</div>
        @endif

        @if($errors->has("$inputName"))
            <em class="text-danger">{!! $errors->first("$inputName") !!}</em>
        @endif
    </div>
</div>

