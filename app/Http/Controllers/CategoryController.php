<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->orderBy(Category::FIELD_TITLE,'asc')->simplePaginate(10);
        return view('intranet.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();

        $data = [
            Category::FIELD_SLUG => Str::slug($request->{Category::FIELD_TITLE}),
            Category::FIELD_VISIBLE => $request->{Category::FIELD_VISIBLE} == 'on' ? 1 : 0,
        ];

        $data = array_merge($validated,$data);

        try {
            $category = Category::create($data);
            flash('Category ' . $category->{Category::FIELD_TITLE} . ' created','success');
            return redirect()->route('categories.index');
        }
        catch(\Exception $e)
        {
            flash('Category could not be created','danger');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     */
    public function show(Category $category)
    {

        DB::beginTransaction();
        try {
            $category->update([
                Category::FIELD_VISIBLE => !$category->{Category::FIELD_VISIBLE}
            ]);
            $category->recipes->each(function($recipe){
                $recipe->update([
                    Recipe::FIELD_VISIBLE => !$recipe->{Recipe::FIELD_VISIBLE}
                ]);
            });

            DB::commit();
            flash('Visibility changed','success');
            return redirect()->back();
        }
        catch(\Exception $e){
            DB::rollBack();
            flash('Error, changing visibility','danger');
            return redirect()->back();
        }    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Category $category)
    {
        return view('intranet.categories.form',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Category  $category
     */
    public function update(UpdateCategory $request, Category $category)
    {
        try {
            $category->update([
                Category::FIELD_TITLE => $request->{Category::FIELD_TITLE},
                Category::FIELD_SLUG => Str::slug($request->{Category::FIELD_TITLE}),
                Category::FIELD_VISIBLE => $request->{Category::FIELD_VISIBLE} == 'on' ? 1 : 0,
            ]);

            flash('Category ' . $category->{Category::FIELD_TITLE} . ' updated','success');
            return redirect()->route('categories.index');
        }
        catch(\Exception $e)
        {
            flash("Category could not be updated",'danger');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     */
    public function destroy(Category $category)
    {
        DB::beginTransaction();
        try {
            $category->recipes->each(function($recipe){
                $recipe->delete();
            });

            $category->delete();
            DB::commit();
            flash('Category and all associated recipes deleted','success');
            return redirect()->route('categories.index');
        }
        catch(\Exception $e){
            DB::rollBack();
            flash('Error deleting category','danger');
            return redirect()->back();
        }
    }

}
