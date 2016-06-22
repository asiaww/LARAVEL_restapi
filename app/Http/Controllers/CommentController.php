<?php

namespace App\Http\Controllers;

use App;
use App\Comment;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CommentController extends Controller
{

    /**
     * Display the Comments resource.
     * GET /comment
     *
     * @return Response
     */
    public function index()
    {
        return Comment::with('user')->get();
    }

    /**
     * Display the specified Comment resource.
     * GET /comment/{id}
     *
     * @param  int $id The id of a Comment
     * @return Response
     */
    public function show($id)
    {

        if (($comment = Comment::with('user')->where('id', $id)->first()) == null) {
            return response(null, 404);
        }
        return $comment;
    }

    /**
     * Display recent comments.
     * GET /comments/recent/{limit}
     *
     * @param  int $limit Limit of results number
     * @return Response
     */
    public function recent(Request $request, $limit)
    {

        $this->validate($request, [
           'limit' => 'integer'
        ]);

        $recipes = Comment::with('recipe')
            ->orderBy('created_at', 'DESC');
        if ($limit) {
            $recipes->take($limit);
        }

        return $recipes->get();
    }


    /**
     * Create the specified Comment resource.
     * POST /comment
     *
     * @param  string $content The name of a Comment
     * @param  string $created_by_id The id of the User
     * @param  string $recipe_id The id of the Recipe
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'content' => 'required|min:3|max:255',
            'created_by_id' => 'required|exists:users,id',
            'recipe_id' => 'required|exists:recipes,id',
        ]);

        $created_by_id = $request->get('created_by_id');
        $content = $request->get('content');
        $recipe_id = $request->get('recipe_id');


        if ($content && $recipe_id && $created_by_id) {
            try {
                $comment = new Comment();
                $comment->content = $content;
                $comment->created_by_id = $created_by_id;
                $comment->recipe_id = $recipe_id;
                $comment->save();
            } catch (Exception $e) {
                return response(null, 404);
            }
//
        } else {
            return response(null, 404);
        }

        return $comment;
    }

    /**
     * Update the specified Comment resource.
     * PUT /comment/{id}
     * @param  int $id The id of a Comment
     * @param  string $content The name of a Comment
     * @param  string $created_by_id The id of the User
     * @param  string $recipe_id The id of the Recipe
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'content' => 'min:3|max:255',
            'created_by_id' => 'exists:users,id',
            'recipe_id' => 'exists:recipes,id',
        ]);

        $comment = Comment::find($id);
        if ($comment == null) {
            return response(null, 404);
        }

        $created_by_id = $request->get('created_by_id');
        $content = $request->get('content');
        $recipe_id = $request->get('recipe_id');

        if ($content == null && $created_by_id == null && $recipe_id == null) {
            return response(null, 400);
        }

        if ($content) {
            $comment->content = $content;
        }
        if ($created_by_id) {
            $comment->created_by_id = $created_by_id;
        }
        if ($recipe_id) {
            $comment->$recipe_id = $recipe_id;
        }
        $comment->save();

        return $comment;
    }

    /**
     * Update the specified Comment resource.
     * DELETE /comment/{id}
     *
     * @param  int $id The id of a Comment
     * @return Response
     */
    public function delete($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response(null, 404);
        }
        else {
            $comment->delete();
        }

        return response(null, 200);
    }

}
