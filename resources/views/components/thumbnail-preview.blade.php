<div class="form-group row my-3" @if(is_null($model) || is_null($model->{$image})) style="display: none;" @endif>
    <div class="col-md-9 offset-3">
        <img src="{{isset($model) && !is_null($model->{$image}) ? route("$routeInfo", $model->id ) : null}}"
             width="200px" id="previewThumbnail" class="img-thumbnail" alt="Thumbnail"/>
    </div>
</div>
