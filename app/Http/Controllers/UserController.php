<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users =User::all();
        return view('user-list')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->input('username'); // single input value
        // return $request->path(); //request path

//        if($request->is('users')){   // Inspecting The Request Path / Route
//            return "User";
//        }

//        if($request->routeIs('users.*')){   // Inspecting The Request Path / Route
//            return "User";
//       }

//        if($request->isMethod('post')){  // Request Method
//            return "POST";
//        }

        //return $request->bearerToken();


        //return $request->ip();

            $request->validate([
                'username'=>'required|string|max:10',
                'email'=>'required|email|string|max:255|unique:users',
                'password'=>'required|confirmed'
            ]);

            User::create([
                'name'=>$request->input('username'),
                'email'=>$request['email'],
                'password'=>Hash::make($request->get('password'))
            ]);

            return ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$user = User::where('name',$id)->first();
       // $user = User::whereName($id)->first();

       $user = User::findOrFail($id);

        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return "Deletted!";
    }
}
