<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pet.index',[
            'pets' => Pet::all()
        ]);
    }


    public function create(){
        return view('pet.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate(
            ['name' => 'required|min:3'],
            ['name.required' => 'Name is required',
                'title.min' => '3 characters at least for the name']);

        $pet = new Pet();
        $pet -> name = $validData['name'];
        $pet -> type = $request->get('type');

        $pet ->save();
        return redirect ('/pets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return $pet;
    }

    public function edit($id){
        $pet  = Pet::findOrFail($id);
        return view('pet.edit',[
            'pet'=>$pet
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validData = $request->validate(
            ['name' => 'required|min:3'],
            ['name.required' => 'Name is required',
                'title.min' => '3 characters at least for the name']);

        $pet  = Pet::findOrFail($id);
        $pet -> name = $validData['name'];
        $pet -> type = $request->get('type');
        $pet ->save();

        return redirect ('/pets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $pet  = Pet::findOrFail($id);
        $pet->delete();

        return redirect ('/pets');
    }
}
