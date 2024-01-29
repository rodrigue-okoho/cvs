<?php


namespace App\Http\Controllers;


use App\Http\Resources\BlogCommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BlogCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $per_page=is_null($request->get("per_page"))?15:$request->get("per_page");
        return BlogCommentResource::collection(Comment::query()->paginate($per_page));

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
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if (is_null($request->get("id"))){
            $comment = new Comment();
            $comment->blog_id   = $request->blog_id;
            $comment->email   = $request->email;
            $comment->name         = $request->name;
            $comment->message       = $request->message;
        }else{
            $comment=Comment::query()->find($request->get("id"));
        }
        $comment->status       = $request->status;
        $comment->save();

        return response()->json('Comment ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     * @param Comment $comment
     * @return BlogCommentResource
     */
    public function show(Comment $comment)
    {
        //
        return new BlogCommentResource($comment) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());

        return response()->json($comment, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $blogCategory)
    {
        //
        $blogCategory->delete();

        return response(null, 204);
    }
}
