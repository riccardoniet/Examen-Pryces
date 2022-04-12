<?php

/*
|--------------------------------------------------------------------------
| Necessities
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Create a new controller instance
|--------------------------------------------------------------------------
*/

class HomeController extends Controller
{
    /**
     * 
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

/*
|--------------------------------------------------------------------------
| Show the application dashboard.
|--------------------------------------------------------------------------
*/

    /**
     * 
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


/*
|--------------------------------------------------------------------------
| Get and send Data 
|--------------------------------------------------------------------------
*/
    public function index()
    {
        return view('home');
    }

    public function edit()
    {
        return view('edit');
    }

/*
|--------------------------------------------------------------------------
| Function to Edit User
|--------------------------------------------------------------------------
*/

    public function setEdit($id) 
    {
        $users = User::where('id',$id)->first();

        $users->name = request('name');
        $users->email = request('email');

        $users->save();
        return redirect('/edit');    
    }

/*
|--------------------------------------------------------------------------
| Function to Delete user
|--------------------------------------------------------------------------
*/

    public function deleteUserlogged($id)
    { 
        $id = User::where('id',$id)->first();

        if ($id->delete()) {

        }
        return redirect()->route('login');
    }

}
