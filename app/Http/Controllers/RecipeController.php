<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::with('category')
            ->orderBy(Recipe::FIELD_ID,'desc')
            ->simplePaginate(10);

        return view('intranet.recipes.index',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->visible()->orderBy(Category::FIELD_TITLE,'asc')->get();
        return view('intranet.recipes.form',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(RecipeRequest $request)
    {
        $validated = $request->validated();

        $data = [
            Recipe::FIELD_VISIBLE => $request->{Recipe::FIELD_VISIBLE} == 'on' ? 1 : 0,
            Recipe::FIELD_SLUG => Str::slug($request->{Recipe::FIELD_TITLE}),
        ];

        $category = Category::findOrFail($request->category_id);

        try {
            if ($request->hasFile(Recipe::FIELD_THUMBNAIL)) {
                $imageName = time() . '.' . $request->{Recipe::FIELD_THUMBNAIL}->extension();
                $request->{Recipe::FIELD_THUMBNAIL}->move(public_path('images'), $imageName);
                $data['thumbnail'] = $imageName;
            }
            $category->recipes()->create(array_merge($data,$validated));
            flash('Recipe created successfully','success');
            return redirect()->route('recipes.index');
        }
        catch(\Exception $e)
        {
            flash($e->getMessage(),'danger');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Recipe $recipe
     */
    public function edit(Recipe $recipe)
    {
        $categories = Category::query()->visible()->orderBy(Category::FIELD_TITLE,'asc')->get();
        return view('intranet.recipes.form',compact('recipe','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Recipe $recipe
     */
    public function update(RecipeRequest $request,Recipe $recipe)
    {
        $imageName = $recipe->{Recipe::FIELD_THUMBNAIL};
        try {
            if ($request->hasFile(Recipe::FIELD_THUMBNAIL)) {
                $imageName = time() . '.' . $request->{Recipe::FIELD_THUMBNAIL}->extension();
                $request->{Recipe::FIELD_THUMBNAIL}->move(public_path('images'), $imageName);
            }

            $recipe->update([
                Recipe::FIELD_TITLE => $request->{Recipe::FIELD_TITLE},
                Recipe::FIELD_SLUG => Str::slug($request->{Recipe::FIELD_SLUG}),
                Recipe::FIELD_PREPARATION_TIME => $request->{Recipe::FIELD_PREPARATION_TIME},
                Recipe::FIELD_NUM_OF_RATIONES => $request->{Recipe::FIELD_NUM_OF_RATIONES},
                Recipe::FIELD_INGREDIENTS => $request->{Recipe::FIELD_INGREDIENTS},
                Recipe::FIELD_PROCEDURE => $request->{Recipe::FIELD_PROCEDURE},
                Recipe::FIELD_VISIBLE => $request->{Recipe::FIELD_VISIBLE} == 'on' ? 1 : 0,
                Recipe::FIELD_THUMBNAIL => $imageName,
            ]);

            flash('Recipe ' . $recipe->{Recipe::FIELD_TITLE} . ' updated','success');
            return redirect()->route('recipes.index');
        }
        catch(\Exception $e)
        {
            flash("Recipe could not be updated successfully",'danger');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Recipe $recipe
     */
    public function destroy(Recipe $recipe)
    {
        try {
            $recipe->delete();
            flash('Recipe deleted successfully','success');
            return redirect()->route('recipes.index');
        }
        catch(\Exception $e)
        {
            flash('Recipe could not be deleted successfully','danger');
            return redirect()->back();
        }
    }
}
