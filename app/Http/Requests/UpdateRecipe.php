<?php

namespace App\Http\Requests;

use App\Models\Recipe;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRecipe extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $recipe = $this->route('recipe'); // Assuming the route parameter is named 'user'
        $rules = Recipe::$rules;
        $rules['title'] = ['required','string',Rule::unique('recipes')->ignore($recipe)];
        return $rules;
    }
}
