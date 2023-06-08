<div class="form-group row">
    <label class="col-md-3 col-form-label">@lang("$inputLabel")</label>
    <div class="col-md-9">
        <div class="form-check mt-2">
            <input type="checkbox" class="form-check-input" id="{{ $inputName }}"
                   @if( old("$inputName") == 'on' || (isset($model->{$inputName}) ))
                   checked
                   @endif
                   name="{{ $inputName }}"/>
            @if(isset($inputLabel2))
                <label for="{{ $inputName }}">{{$inputLabel2}}</label>
            @endif
            @if(isset($infoMessage) && $infoMessage != "")
                <div class="small text-muted">{{ $infoMessage }}</div>
            @endif
        </div>
    </div>
</div>
