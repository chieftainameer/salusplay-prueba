@if($model instanceof App\Models\Recipe)
    <div>
        <p><strong>Published At: </strong>{{ $model->published_at }}</p>
    </div>
@endif
<div>
    <p><strong>Created At: </strong>{{ $model->created_at }}</p>
</div>

<div>
    <p><strong>Updated At: </strong>{{ $model->updated_at }}</p>
</div>