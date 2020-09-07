<?php

namespace App\Http\Controllers;

use App\Fruit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FruitController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $fruits = Fruit::all();

        return view('fruits.index', ['fruits'=>$fruits]);
    }
    public function create(){
        return view('fruits.create');
    }
    public function store(){
        Fruit::create(request()->validate([
                'name'=>['required', Rule::unique('fruits')->whereNull('deleted_at')]]
        ));

        return redirect(route('fruits.index'));
    }
    public function edit(Fruit $fruit){
        return view('fruits.edit', ['fruit' => $fruit]);
    }
    public function update(Fruit $fruit) {
        $fruit->update(request()->validate([
            'name' => ['required', Rule::unique('fruits')->ignore($fruit)->whereNull('deleted_at')],
        ]));

        return redirect(route('fruits.index'));
    }
    public function delete(Fruit $fruit){
        $fruit->delete();

        return redirect(route('fruits.index'));
    }
}
