<?php

namespace App\Http\Controllers;

use App\Models\Ingredients;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{

    public function index(){
        $ingredients = Ingredients::all();
        return view("welcome", compact("ingredients"));
    }
    // public function create() {
    //     return view("/");
    // }

    public function store(Request $request){
        $store = new Ingredients;
        $store->name = $request->name;
        $store->quantity = $request->quantity;
        $store->image = $request->image;
        $store->save();
        return redirect("/");
    }
    public function destroy($id){
        $destroy = Ingredients::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function show($id){
        $show= Ingredients::find($id);
        return view("pages.show", compact("show"));
    }
}
