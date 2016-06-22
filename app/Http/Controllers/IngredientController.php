<?php

namespace App\Http\Controllers;

use App;
use App\Ingredient;
use App\User;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class IngredientController extends Controller
{

    /**
     * Display the Ingredients resource.
     * GET /ingredient
     *
     * @return Response
     */
    public function index()
    {
        return Ingredient::all();
    }

    /**
     * Display the specified Ingredient resource.
     * GET /ingredient/{id}
     *
     * @param  int $id The id of a Ingredient
     * @return Response
     */
    public function show($id)
    {

        if (($ingredient = Ingredient::select()->where('id', $id)->first()) == null) {
            return response(null, 404);
        }
        return $ingredient;
    }

    /**
     * Display the specified Ingredient resource with recipes.
     * GET /ingredient/{id}/recipe
     *
     * @param  int $id The id of a Ingredient
     * @return Response
     */
    public function withRecipes($id)
    {

        if (($ingredient = Ingredient::with('recipes')->where('id', $id)->first()) == null) {
            return response(null, 404);
        }
        return $ingredient;
    }

    /**
     * Create the specified Ingredient resource.
     * POST /ingredient
     *
     * @param  string $name The name of a Ingredient
     * @param  int $created_by_id The id of user who created a Ingredient
     * @return Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required|unique:ingredients|min:3|max:255',
            'created_by_id' => 'required|exists:users,id',
        ]);


        $name = $request->get('name');
        $created_by_id = $request->get('created_by_id');

        $ingredient = new Ingredient();
        $ingredient->created_by_id = $created_by_id;
        $ingredient->name = $name;
        $ingredient->save();


        return $ingredient;
    }

    /**
     * Update the specified Ingredient resource.
     * PUT /ingredient/{id}
     * @param  int $id The id of a Ingredient
     * @param  string $name The name of a Ingredient
     * @param  int $created_by_id The id of user who created a Ingredient
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'unique:ingredients|min:3|max:255',
            'created_by_id' => 'exists:users,id',
        ]);

        $ingredient = Ingredient::find($id);
        if ($ingredient == null) {
            return response(null, 404);
        }

        $name = $request->get('name');
        $created_by_id = $request->get('created_by_id');

        if ($name == null && $created_by_id == null) {
            return response(null, 400);
        }

        if ($name) {
            $ingredient->name = $name;
        }
        if ($created_by_id) {
            $ingredient->created_by_id = $created_by_id;
        }
        $ingredient->save();

        return $ingredient;
    }

    /**
     * Update the specified Ingredient resource.
     * DELETE /ingredient/{id}
     *
     * @param  int $id The id of a Ingredient
     * @return Response
     */
    public function delete($id)
    {
        $ingredient = Ingredient::find($id);

        if (!$ingredient) {
            return response(null, 404);
        } else {
            $ingredient->delete();
        }

        return response(null, 200);
    }

}
