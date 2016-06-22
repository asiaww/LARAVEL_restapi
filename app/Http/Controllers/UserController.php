<?php

namespace App\Http\Controllers;

use App;
use App\User;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use PhpSpec\Exception\Exception;


class UserController extends Controller
{

    /**
     * Display the Users resource.
     * GET /user
     *
     * @return Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Display the specified User resource.
     * GET /user/{id}
     *
     * @param  int $id The id of a User
     * @return Response
     */
    public function show($id)
    {

        if (($user = User::select()->where('id', $id)->first()) == null) {
            return response(null, 404);
        }
        return $user;
    }

    /**
     * Display the most Active ( with highest number of comments ) Users resource.
     * GET /user/most-active/{limit}
     *
     * @param  int $limit Limit of results number
     * @return Response
     */
    public function mostActive(Request $request, $limit)
    {
        $this->validate($request, [
           'limit' => 'integer' 
        ]);

        $recipes = User::with('comments')
            ->select(DB::raw('(SELECT COUNT(comments.id)
             from comments where comments.created_by_id = users.id) as comment_count, users.*'))
            ->orderByRaw('comment_count DESC');
        if ($limit) {
            $recipes->take($limit);
        }
        return $recipes->get();
    }

    /**
     * Display the specified User resource.
     * GET /user/{id}/comments
     *
     * @param  int $id The id of a User
     * @return Response
     */
    public function withComments($id)
    {

        if (($user = User::with('comments')->where('id', $id)->first()) == null) {
            return response(null, 404);
        }
        return $user;
    }

    /**
     * Create the specified User resource.
     * POST /user
     *
     * @param  string $name The name of a User
     * @param  string $email The email of a User
     * @param  string $password The password of a User
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:users|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|max:255'
        ]);

        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');

        try {
            $user = User::create(['name' => $name, 'email' => $email, 'password' => $password]);
        } catch (Exception $e) {
            return response(null, 404);
        }


        return $user;
    }

    /**
     * Update the specified User resource.
     * PUT /user/{id}
     * @param  int $id The id of a User
     * @param  string $name The name of a User
     * @param  string $email The email of a User
     * @param  string $password The password of a User
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'unique:users|max:255',
            'email' => 'unique:users|email',
            'password' => 'min:6|max:255'
        ]);

        $user = User::find($id);
        if ($user == null) {
            return response(null, 404);
        }

        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');

        if ($name == null && $email == null && $password == null) {
            return response(null, 400);
        }

        if ($name) {
            $user->name = $name;
        }
        if ($email) {
            $user->email = $email;
        }
        if ($password) {
            $user->password = $password;
        }
        $user->save();


        return $user;
    }

    /**
     * Update the specified User resource.
     * DELETE /user/{id}
     *
     * @param  int $id The id of a User
     * @return Response
     */
    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response(null, 404);
        } else {
            $user->delete();
        }

        return response(null, 200);
    }

}
