<?php


namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogMapCategory;
use App\Models\BlogMapTag;
use Illuminate\Http\Request;
use function Symfony\Component\String\Slugger\slug;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $per_page=is_null($request->get("per_page"))?15:$request->get("per_page");
        return BlogResource::collection(Blog::query()->paginate($per_page));
    }

    public function create()
    {
        //

    }
    public function blog_category(Request $request)
    {
        $category=BlogCategory::find($request->get('category_id'));


    }
    public function store(Request $request)
    {

        if(is_null($request->id)){
            $blog = new Blog();
            $blog->created_by       = $request->created_by;
        }else{
            $blog=Blog::find($request->id);
        }


        $blog->name             = $request->name;
        $blog->slug             = Helpers::slug($request->name);
        $blog->publish_datetime = new \DateTime('now');
        $blog->content          = $request->content;
        $blog->meta_title       = $request->meta_title;
        $blog->meta_keywords    = $request->meta_keywords;
        $blog->status           = $request->status; /// 1 or 0
        $blog->updated_by       = $request->updated_by;
        if (!is_null($request->featured_image)){
            $image_url=Helpers::uploadImage($request->featured_image,$request->featured_type,"blogs");
            logger($image_url);
            $blog->cannonical_link  =$image_url;
            $blog->featured_image   =$image_url;
        }
        $blog->save();
        $category_ids=$request->get("category_ids");
        for ($i=0;$i<sizeof($category_ids);$i++){
            $category=BlogMapCategory::query()->firstWhere(['blog_id'=>$blog->id,'category_id'=>$category_ids[$i]]);
            if (is_null($category)){
                $category=new BlogMapCategory();
                $category->blog_id=$blog->id;
                $category->category_id=$category_ids[$i];
                $category->save();
            }
        }
        $tag_ids=$request->get("tag_ids");
        for ($i=0;$i<sizeof($tag_ids);$i++){
            $tag=BlogMapTag::query()->firstWhere(['blog_id'=>$blog->id,'tag_id'=>$tag_ids[$i]]);
            if (is_null($tag)){
                $tag=new BlogMapTag();
                $tag->blog_id=$blog->id;
                $tag->tag_id=$tag_ids[$i];
                $tag->save();
            }
        }
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
