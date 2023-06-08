@extends('layouts.intranet')

@section('content')
    <div class="container-fluid mt-4">
        @include('partials.flash')
        <div class="card">
            <div class="card-header">
                <h2 class="float-left">
                    <i class=""></i> {{ isset($category) ?  "Edit Category" : "New Category" }}
                </h2>
            </div>
            <div class="card-body">
                <form action="{{isset($category) ? route('categories.update',$category) : route('categories.store')}}"
                      method="POST">
                    @if(isset($category)) @method('PUT') @endif
                    @csrf
                    <x-inputs.common
                            :model="isset($category) ? $category : null"
                            inputLabel="Title"
                            inputName="title"
                            inputType="text"
                            infoMessage="Enter category title"
                            required
                    ></x-inputs.common>

                    <x-inputs.checkbox
                            :model="isset($category) ? $category : null"
                            inputName="visible"
                            inputLabel="Visibility"
                            inputLabel2="Hidden"
                            infoMessage="Check this inbox if you want to hide this category, by default it will be visible"
                    ></x-inputs.checkbox>


                    <div>
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a class="btn btn-danger" href="{{ route('categories.index') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection