<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogTagResource;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $per_page=is_null($request->get("per_page"))?15:$request->get("per_page");
        return BlogTagResource::collection(BlogTag::query()->paginate($per_page));

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
        $blogTag = new BlogTag();

        $blogTag->name         = $request->name;
        $blogTag->status       = $request->status;
        $blogTag->created_by   = $request->created_by;
        $blogTag->updated_by   = $request->updated_by;


        $blogTag->save();

        return response()->json('blogTag ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogTag $blogTag)
    {
        //
        return new BlogTagResource($blogTag) ;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogTag $blogTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $blogTag = BlogTag::findOrFail($id);
        $blogTag->update($request->all());

        return response()->json($blogTag, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogTag $blogTag)
    {
        //
        $blogTag->delete();

        return response(null, 204);
    }
}
