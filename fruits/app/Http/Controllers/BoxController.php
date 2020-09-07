<?php

namespace App\Http\Controllers;

use App\Box;
use App\Fruit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BoxController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boxes = Box::all();

        return view('boxes.index', ['boxes' => $boxes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fruits = Fruit::all();

        return view('boxes.create', ['fruits'=>$fruits]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'name'=>['required', Rule::unique('boxes')->whereNull('deleted_at')],
            'fruit_name'=>'required',
            'capacity'=>'required|numeric'
        ]);

        Box::create([
            'name'=>request('name'),
            'fruit_id'=>Fruit::where('name', request('fruit_name'))->first()->id,
            'capacity'=>request('capacity')
        ]);

        return redirect(route('boxes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function show(Box $box)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function edit(Box $box)
    {
        $fruits = Fruit::all();

        return view('boxes.edit', ['box' => $box, 'fruits'=>$fruits]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function update(Box $box)
    {
        request()->validate([
            'name'=>['required', Rule::unique('boxes','name')->ignore($box)],
            'fruit_name'=>'required',
            'capacity'=>'required|numeric',
            'volume'=>'required|numeric'
        ]);

        $box->update([
            'name'=>request('name'),
            'fruit_id'=>Fruit::where('name', request('fruit_name'))->first()->id,
            'capacity'=>request('capacity'),
            'volume'=>request('volume')
        ]);

        return redirect(route('boxes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function delete(Box $box)
    {
        $box->delete();

        return redirect(route('boxes.index'));
    }
}
