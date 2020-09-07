<?php

namespace App\Http\Controllers;

use App\Box;
use App\Fruit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{

    public function index(){
        $fruits = Fruit::all();

        return view('apply.index', ['fruits'=>$fruits]);
    }
    public function place(){
        request()->validate([
            'fruit_name'=>'required',
            'quantity'=>'required|numeric'
        ]);

        $fruit = Fruit::where('name', request('fruit_name'))->get();
        if ($fruit->isEmpty()){
            return redirect()->back()->withErrors(['no_fruit' => 'Данного фрукта нет в справочнике!']);
        }

        $boxes = $fruit->first()->boxes;
        if ($boxes->isEmpty()){
            return redirect()->back()->withErrors(['no_boxes' => 'Нет ящиков с данным фруктом!']);
        }

        $quantity = request('quantity');
        foreach ($boxes as $box){
            if ($box->capacity >= $box->volume + $quantity){
                $box->update([
                    'volume'=>$box->volume + $quantity
                ]);
                return view('apply.added', ['box'=>$box]);
            }
        }

        return redirect()->back()->withErrors(['no_space' => "Ни один из ящиков не может вместить такое количество!"]);
    }
}
