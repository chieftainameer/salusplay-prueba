<div class="form-group row my-3">
    <label class="col-md-3 col-form-label" for="{{$inputName}}">
        @lang("$inputLabel") @if($required) * @endif
    </label>
    <div class="col-md-9">
        <input
                name="{{$inputName}}"
                type="file"
                class="form-control"
                id="{{$id ?? $inputName}}"
                accept="{{$accept}}"
                value=""
                @if($required) required @endif
        >
        @if(isset($infoMessage) && $infoMessage != "")
            <div class="small text-muted">{!! $infoMessage!!}</div>
        @endif
        @if($errors->has("$inputName"))
            <em class="text-danger">{!! $errors->first("$inputName") !!}</em>
        @endif
    </div>
</div>
