<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogCategoryResource;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return BlogCategoryResource::collection(BlogCategory::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $blogCategory = new BlogCategory();

        $blogCategory->name         = $request->name;
        $blogCategory->status       = $request->status;
        $blogCategory->created_by   = $request->created_by;
        $blogCategory->updated_by   = $request->updated_by;


        $blogCategory->save();

        return response()->json('BlogCategory ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogCategory $blogCategory)
    {
        //
        return new BlogCategoryResource($blogCategory) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->update($request->all());

        return response()->json($blogCategory, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogCategory $blogCategory)
    {
        //
        $blogCategory->delete();

        return response(null, 204);
    }
}
