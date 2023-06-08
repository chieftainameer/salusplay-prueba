<div class="btn-group">

        <a class="btn btn-outline-primary" data-toggle="tooltip" title="show me"
           href='{{ route($routeResource.'.show',$model) }}'>
            @if($model->visible) <i class="fa fa-eye "><!----></i> @else <i class="fa fa-eye-slash "><!----></i> @endif
        </a>
    <a class="btn btn-outline-success" data-toggle="tooltip" title="Edit"
            href="{{ route($routeResource.'.edit',$model) }}">
        <i class="fa fa-edit text-success"><!----></i>
    </a>
    <form action="{{ route($routeResource.'.destroy',$model) }}" method="POST"
          class="btn-group">
        @csrf
        @method('delete')
        <a class="btn btn-outline-danger deleteItem" data-toggle="tooltip" title="delete"
        >
            <i class="fa fa-trash"><!----></i>
        </a>
    </form>
</div>