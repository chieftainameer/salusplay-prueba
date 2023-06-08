<div class="form-group row my-3">
    @if($inputLabel)
        <label  class="col-md-3 col-form-label" for="{{$inputName}}">
            @lang("$inputLabel") @if($required) * @endif
        </label>
    @endif

    <div class="col-md-9">
        <textarea maxlength="{{$max}}"
                  name="{{$inputName}}"
                  @if($id) id="{{$id}}" @endif
                  cols="{{$cols}}"
                  rows="{{$rows}}"
                  class="form-control {{$class}}"
                  @if($required) required @endif>{{old("$inputName",isset($model) && $model->{$inputName} ? $model->{$inputName} : null )}}</textarea>

        @if(isset($infoMessage) && $infoMessage != "")
            <div class="small text-muted">{!! $infoMessage!!}</div>
        @endif

    </div>
</div>
