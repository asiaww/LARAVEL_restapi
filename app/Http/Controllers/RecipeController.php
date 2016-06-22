<?php

namespace App\Http\Controllers;

use App;
use App\Recipe;
use DB;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class RecipeController extends Controller
{

    /**
     * Display random daily menu.
     * GET /recipe/menu/
     *
     * @return Response
     */
    public function randomDailyMenu()
    {
        $breakfast = Recipe::with('ingredients')->orderByRaw("RAND()")->where('recipes.category', 'Breakfast')->first();
        $lunch = Recipe::with('ingredients')->orderByRaw("RAND()")->where('recipes.category', 'Lunch')->first();
        $supper = Recipe::with('ingredients')->orderByRaw("RAND()")->where('recipes.category', 'Supper')->first();

        $ingredientsList = [];
        foreach ([$breakfast, $lunch, $supper] as $meal) {
            foreach ($meal->ingredients as $ingredient) {
                $ingredientsList[$ingredient->id] =
                    ['quantity' => (isset($ingredientsList[$ingredient->id]['quantity'])) ?
                        $ingredientsList[$ingredient->id]['quantity'] + 1 : 1
                        , 'ingredient' => $ingredient];
            }
        }

        return $menu = ['ingredients_list' => $ingredientsList, 'meals' => ['breakfast' => $breakfast, 'lunch' => $lunch, 'supper' => $supper]];

    }

    /**
     * Display the Recipes resource.
     * GET /recipe
     *
     * @return Response
     */
    public function index()
    {
        return $recipes = Recipe::with('ingredients')->with('comments')
            ->select(DB::raw('(SELECT AVG(comments.rate)
             from comments where comments.recipe_id = recipes.id) as avg, recipes.*'))
            ->get();

    }

    /**
     * Display the specified Recipe resource.
     * GET /recipe/{id}
     *
     * @param  int $id The id of a Recipe
     * @return Response
     */
    public function show($id)
    {
        if (($recipe = Recipe::with('ingredients')->with('comments')
                ->select(DB::raw('(SELECT AVG(comments.rate)
             from comments where comments.recipe_id = recipes.id) as avg, recipes.*'))
                ->where('id', $id)->first()) == null
        ) {
            return response(null, 404);
        }
        return $recipe;
    }

    /**
     * Display the 10 of Top Rated Recipes resource.
     * GET /recipe/top-rated/{limit}
     *
     * @param  int $limit Limit of results number
     * @return Response
     */
    public function topRated(Request $request, $limit)
    {
        $this->validate($request, [
            'limit' => 'integer'
        ]);

        $recipes = Recipe::with('comments')
            ->select(DB::raw('(SELECT AVG(comments.rate)
             from comments where comments.recipe_id = recipes.id) as avg, recipes.*'))
            ->orderByRaw('avg DESC');
        if ($limit) {
            $recipes->take($limit);
        }

        return $recipes->get();
    }

    /**
     * Search by phrase provided by user.
     * GET /recipe/query/{limit}
     *
     * @param  int $limit Limit of results number
     * @param  string $query Phrase provided by user
     * @return Response
     */
    public function query(Request $request, $limit)
    {
        $this->validate($request, [
            'limit' => 'integer',
            'query' => ''
        ]);


        $query = $request->get('query');
        $recipes = Recipe::with('comments')
            ->leftJoin('comments', 'recipes.id', '=', 'comments.recipe_id')
            ->where('recipes.title', 'like', '%' . $query . '%')
            ->orWhere('recipes.description', 'like', '%' . $query . '%');

        if ($limit) {
            $recipes->take($limit);
        }

        return $recipes->get();
    }

    /**
     * Display the 10 of Most Commented Recipes resource.
     * GET /recipe/most-commented/{limit}
     *
     * @param  int $limit Limit of results number
     * @return Response
     */
    public function mostCommented(Request $request, $limit)
    {
        $this->validate($request, [
                'limit' => 'integer'
            ]);

        $recipes = Recipe::with('comments')
            ->select(DB::raw('(SELECT COUNT(comments . id)
             from comments where comments . recipe_id = recipes . id) as comment_count, recipes .*'))
            ->orderByRaw('comment_count DESC');
        if ($limit) {
            $recipes->take($limit);
        }

        return $recipes->get();
    }

    /**
     * Create the specified Recipe resource.
     * POST /recipe
     *
     * @param  int $created_by_id The id of User who created a Recipe
     * @param  string $title The title of  a Recipe
     * @param  string $description The description of  a Recipe
     * @param  string $required_time_in_minutes The required_time_in_minutes of  a Recipe
     * @param  string $cuisine The cuisine of  a Recipe
     * @param  string $category The category of  a Recipe
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:recipes|min:3|max:255',
            'description' => 'required',
            'required_time_in_minutes' => 'required|integer',
            'cuisine' => 'required|min:3|max:255',
            'category' => 'required|min:3|max:255',
            'created_by_id' => 'required|exists:users,id',
        ]);

        $title = $request->get('title');
        $description = $request->get('description');
        $required_time_in_minutes = $request->get('required_time_in_minutes');
        $cuisine = $request->get('cuisine');
        $category = $request->get('category');
        $created_by_id = $request->get('created_by_id');

        $recipe = new Recipe();
        $recipe->title = $title;
        $recipe->created_by_id = $created_by_id;
        $recipe->description = $description;
        $recipe->required_time_in_minutes = $required_time_in_minutes;
        $recipe->cuisine = $cuisine;
        $recipe->category = $category;
        $recipe->save();

        return $recipe;
    }

    /**
     * Update the specified Recipe resource.
     * PUT /recipe/{id}
     * @param  int $id The id of a Recipe
     * @param  int $created_by_id The id of User who created a Recipe
     * @param  string $title The title of  a Recipe
     * @param  string $description The description of  a Recipe
     * @param  string $required_time_in_minutes The required_time_in_minutes of  a Recipe
     * @param  string $cuisine The cuisine of  a Recipe
     * @param  string $category The category of  a Recipe
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'unique:recipes|max:255',
            'description' => '',
            'required_time_in_minutes' => 'integer',
            'cuisine' => 'max:255',
            'category' => 'max:255',
            'created_by_id' => 'exists:users,id',
        ]);

        $recipe = Recipe::find($id);
        if ($recipe == null) {
            return response(null, 404);
        }

        $title = $request->get('title');
        $created_by_id = $request->get('created_by_id');
        $description = $request->get('description');
        $required_time_in_minutes = $request->get('required_time_in_minutes');
        $cuisine = $request->get('cuisine');
        $category = $request->get('category');

        if ($title) {
            $recipe->title = $title;
        }
        if ($created_by_id) {
            $recipe->created_by_id = $created_by_id;
        }
        if ($description) {
            $recipe->description = $description;
        }
        if ($required_time_in_minutes) {
            $recipe->required_time_in_minutes = $required_time_in_minutes;
        }
        if ($cuisine) {
            $recipe->cuisine = $cuisine;
        }
        if ($category) {
            $recipe->category = $category;
        }
        $recipe->save();

        return $recipe;
    }

    /**
     * Update the specified Recipe resource.
     * DELETE /recipe/{id}
     *
     * @param  int $id The id of a Recipe
     * @return Response
     */
    public function delete($id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response(null, 404);
        }
        else {
            $recipe->delete();
        }

        return response(null, 200);
    }

}
