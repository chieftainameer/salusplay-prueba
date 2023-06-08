<div class="btn-group">
    @if($model->visible)
    <a class="btn btn-outline-primary" data-toggle="tooltip" title="hide me"
       href='{{ route($routeResource.'.hide',$model) }}'>
        <i class="fa fa-eye "><!----></i>
    </a>
    @else
        <a class="btn btn-outline-primary" data-toggle="tooltip" title="show me"
           href='{{ route($routeResource.'.show',$model) }}'>
            <i class="fa fa-eye-slash "><!----></i>
        </a>
    @endif
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