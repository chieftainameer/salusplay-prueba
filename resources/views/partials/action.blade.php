<div class="btn-group">
    <a class="btn btn-outline-primary" data-toggle="tooltip" title="visibility"
       href='{{ route($routeResource.'.show',$category) }}'>
        <i class="fa fa-eye "><!----></i>
    </a>
    <a class="btn btn-outline-success" data-toggle="tooltip" title="Edit"
            href="{{ route($routeResource.'.edit',$category) }}">
        <i class="fa fa-edit text-success"><!----></i>
    </a>
    <form action="#" method="POST" enctype="multipart/form-data"
          class="btn-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ method_field('DELETE') }}
        <a class="btn btn-outline-danger deleteItem" data-toggle="tooltip" title="delete"
           href="{{ route($routeResource.'.destroy',$category) }}">
            <i class="fa fa-trash"><!----></i>
        </a>
    </form>
</div>