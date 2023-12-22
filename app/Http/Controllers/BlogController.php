<?php


namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return BlogResource::collection(Blog::all());
    }

    public function create()
    {
        //
        
    }

    public function store(Request $request)
    {
        //
        $blog = new Blog();

        $blog->name             = $request->name;
        $blog->slug             = $request->slug;
        $blog->publish_datetime = $request->publish_datetime;
        $blog->content          = $request->content;
        $blog->meta_title       = $request->meta_title;
        $blog->cannonical_link  = $request->cannonical_link;
        $blog->meta_keywords    = $request->meta_keywords;
        $blog->status           = $request->status;
        $blog->featured_image   = $request->featured_image;
        $blog->created_by       = $request->created_by;
        $blog->updated_by       = $request->updated_by;

        $blog->save();

        return response()->json('Le blog a été ajoutée avec succès !');
    }
 
    public function show(Blog $blog)
    {
        //
        return new BlogResource($blog) ;
    }

    public function edit(Request $request)
    {
        //
        
    }

    public function update(Request $request, $id)
    {
        //
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return response()->json($blog, 200);
        
    }

    public function destroy(Blog $blog)
    {
       //
       $blog->delete();

       return response(null, 204);
    }


}
