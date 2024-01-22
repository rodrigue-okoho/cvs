<?php


namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;
use function Symfony\Component\String\Slugger\slug;

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

        if(is_null($request->id)){
            $blog = new Blog();
            $blog->created_by       = $request->created_by;
        }else{
            $blog=Blog::find($request->id);
        }
        if (!is_null($request->featured_image)){
            $image_url=Helpers::uploadImage($request->featured_image,$request->featured_type,"blogs");
            $blog->cannonical_link  = $image_url;
            $blog->featured_image   = $image_url;
        }

        $blog->name             = $request->name;
        $blog->slug             = Helpers::slug($request->name);
        $blog->publish_datetime = new \DateTime('now');
        $blog->content          = $request->content;
        $blog->meta_title       = $request->meta_title;
        $blog->meta_keywords    = $request->meta_keywords;
        $blog->status           = $request->status; /// 1 or 0
        $blog->updated_by       = $request->updated_by;
        $blog->save();

        return response()->json('Le blog a été ajoutée avec succès !');
    }

    public function show(Blog $blog)
    {
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
