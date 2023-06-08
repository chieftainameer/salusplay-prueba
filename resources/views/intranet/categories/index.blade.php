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
                    <h2>Categories</h2>
                    <div>
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">New Category</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">General Information</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="{{ $category->id }}">{{ $category->id }}</th>
                                    <td>{{ $category->title }}</td>
                                    <td>@include('partials.general_information',['model' => $category])</td>
                                    <td>@include('partials.action',['model' => $category,'routeResource' => 'categories'])</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('innerJs')
    <script src="{{ asset('js/common/delete.js') }}"></script>
@endpush