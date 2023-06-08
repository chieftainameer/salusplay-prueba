@extends('layouts.intranet')

@section('content')
    @component('partials.delete_modal')
        @slot('modalId')
            modalDeleteItem
        @endslot
        @slot('title')
            Are you sure you want to delete this item?
        @endslot
        @slot('closeBtn')
            Cancel
        @endslot
        @slot('closeBtnId')
            close-delete
        @endslot
        @slot('cancelBtnId')
            cancel-delete
        @endslot
        @slot('acceptBtn')
            Delete
        @endslot
        @slot('btnId')
            deleteBtn
        @endslot
        Item will be deleted permanently
    @endcomponent
    <div class="row">
        <div class="col-12">

            @include('partials.flash')

            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2>Recipes</h2>
                    <div>
                        <a href="{{ route('recipes.create') }}" class="btn btn-primary">New Recipe</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">General Information</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($recipes as $recipe)
                                <tr>
                                    <th scope="{{ $recipe->id }}">{{ $recipe->id }}</th>
                                    <td>{{ $recipe->title }}</td>
                                    <td><a href="#">{{ $recipe->category->title }}</a></td>
                                    <td>@include('partials.general_information',['model' => $recipe])</td>
                                    <td>@include('partials.action',['model' => $recipe,'routeResource' => 'recipes'])</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{ $recipes->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('innerJs')
    <script src="{{ asset('js/common/delete.js') }}"></script>
@endpush