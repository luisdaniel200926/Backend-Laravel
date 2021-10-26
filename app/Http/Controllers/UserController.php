<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct()
    {
        // check if user is logged in, if not then redirect them to the login page
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('user.index',[
            'users' => User::all()
        ]);
    }


    public function create(){
        return view('user.create');
    }

    public function store(Request $request)
    {


        $validData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validData['name'],
            'lastname' => $validData['lastname'],
            'type' => $validData['type'],
            'email' => $validData['email'],
            'password' => Hash::make($validData['password']),
        ]);

        $user->save();
        return redirect ('/users');
    }


    public function show(User $user)
    {
        return $user;
    }

    public function edit($id){
        $user  = User::findOrFail($id);
        return view('user.edit',[
            'user'=>$user
        ]);
    }

    public function update(Request $request, $id)
    {
        /*$validData = $request->validate(
            ['name' => 'required|min:3'],
            ['name.required' => 'Name is required',
                'title.min' => '3 characters at least for the name']);

        $pet  = Pet::findOrFail($id);
        $pet -> name = $validData['name'];
        $pet -> type = $request->get('type');
        $pet ->save();

        return redirect ('/pets');*/
    }


    public function destroy(Request $request,$id)
    {

        $user  = User::findOrFail($id);
        $user->delete();

        return redirect ('/users');

    }
}
