<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:2|max:255',
            'description' => 'required|string',
        ]);

        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category;
        $subcategory->title = $request->title;
        $subcategory->description = $request->description;

        $subcategory->save();

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        $currentSubCategory = SubCategory::find($subCategory->id);

        return view('subcategories.show', compact('currentSubCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $currentSubCategory = SubCategory::find($subCategory->id);

        return view('subcategories.edit', compact('currentSubCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $currentSubCategory = SubCategory::find($subCategory->id);

        $currentSubCategory->category_id = $request->category;
        $currentSubCategory->title = $request->title;
        $currentSubCategory->description = $request->description;

        $currentSubCategory->save();

        return redirect()->home();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(SubCategory $subCategory)
    {
        $currentSubCategory = SubCategory::find($subCategory->id);

        $currentSubCategory->delete();

        return redirect()->home();
    }
}
