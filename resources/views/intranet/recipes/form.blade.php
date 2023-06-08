@extends('layouts.intranet')

@section('content')
    <div class="container-fluid mt-4">
        @include('partials.flash')
        <div class="card">
            <div class="card-header">
                <h2 class="float-left">
                    <i class=""></i> {{ isset($recipe) ?  "Edit Recipe" : "New Recipe" }}
                </h2>
            </div>
            <div class="card-body">
                <form action="{{isset($recipe) ? route('recipes.update',$recipe) : route('recipes.store')}}"
                      method="POST">
                    @if(isset($recipe)) @method('PUT') @endif
                    @csrf

                    <x-inputs.checkbox
                            :model="isset($recipe) ? $recipe : null"
                            inputName="visible"
                            inputLabel="Visibility"
                            inputLabel2="Hidden"
                            infoMessage="Check this inbox if you want to hide this category, by default it will be visible"
                    ></x-inputs.checkbox>

                    <x-inputs.common
                            :model="isset($recipe) ? $recipe : null"
                            inputLabel="Title"
                            inputName="title"
                            inputType="text"
                            infoMessage="Enter recipe title"
                            required
                    ></x-inputs.common>

                    <x-inputs.select
                            :model="isset($recipe) ? $recipe : null"
                            inputName="category_id"
                            id="category_id"
                            inputLabel="Category"
                            infoMessage="Select a category from the list"
                            :options="$categories"
                            optionValue="id"
                            optionName="title"
                            :optionSelected="old('category_id', isset($recipe) ? $recipe->category_id : null)"
                            required
                    >
                    </x-inputs.select>

                    <x-inputs.file-input
                            :model="isset($recipe) ? $recipe : null"
                            inputType="text"
                            inputLabel="Thumbnail"
                            inputName="thumbnail"
                            id="thumbnail"
                            infoMessage="Primary image of the recipe"
                            required
                    ></x-inputs.file-input>

                    <x-thumbnail-preview
                            :model="isset($recipe) ? $recipe : null"
                            routeInfo="get.primary.poi"
                            image="thumbnail"
                    ></x-thumbnail-preview>

                    <x-inputs.common
                            :model="isset($recipe) ? $recipe : null"
                            inputType="number"
                            inputLabel="Preparation time"
                            inputName="preparation_time"
                            infoMessage="Enter preparation time of this recipe in minuts"
                            size="10"
                            required
                    ></x-inputs.common>

                    <x-inputs.common
                            :model="isset($recipe) ? $recipe : null"
                            inputType="number"
                            inputLabel="Number of rations"
                            inputName="num_of_rationes"
                            infoMessage="Enter no of rations in one serving"
                            size="10"
                            required
                    ></x-inputs.common>

                    <x-inputs.common
                            :model="isset($recipe) ? $recipe : null"
                            inputLabel="Ingredients"
                            inputName="ingredients"
                            inputType="text"
                            infoMessage="Enter all the ingredients of this recipe"
                            required
                    ></x-inputs.common>

                    <x-inputs.text-area
                            :model="isset($recipe) ? $recipe : null"
                            inputType="textarea"
                            inputLabel="Procedure"
                            inputName="procedure"
                            class="summernote"
                            id="summernote1"
                            infoMessage="Describe the complete procedure of the recipe"
                            required
                    ></x-inputs.text-area>

                    <div>
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a class="btn btn-danger" href="{{ route('recipes.index') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('innerJs')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $('#summernote1').summernote({
            height: 150,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    </script>
    <script src="{{ asset('js/common/form.js') }}"></script>
@endpush