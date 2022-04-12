<?php

/*
|--------------------------------------------------------------------------
| Necessities
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Create a new controller instance
|--------------------------------------------------------------------------
*/

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

/*
|--------------------------------------------------------------------------
| Function to get Users 
|--------------------------------------------------------------------------
*/

    //Get users for gebruikers
    public function getAll(){
        $users = \App\Models\User::get();
        return view('gebruikers/gebruikers')->with('users', $users);
    }
    //Get user for GebruikerEdit
    public function getUser($id)
    {
        $user = User::find($id);
        return view('gebruikers/gebruikersEdit')->with('user', $user);
    }
    //Get user to GebruikersCreate
    public function getNewUser() {
        return view('gebruikers/gebruikersCreate');
    }

/*
|--------------------------------------------------------------------------
| Public function to create a New user
|--------------------------------------------------------------------------
*/

    public function createUser()
    { 
        User::create([
            "name"      => $_POST["name"],
            "email"     => $_POST["email"],
            "password"  => $_POST["password"],
            "rol"       => $_POST["rol"],
        ]);

        return redirect('/gebruikers');    
    }

/*
|--------------------------------------------------------------------------
| Public function to update a User
|--------------------------------------------------------------------------
*/

    public function updateUser($id)
    { 
        $users = User::where('id',$id)->first();

        $users->name = request('name');
        $users->email = request('email');
        $users->rol = request('rol');
        
        $users->save();
        
        return redirect('/gebruikers');    
    }

/*
|--------------------------------------------------------------------------
| Public function to Delete User
|--------------------------------------------------------------------------
*/
  
    public function deleteUser($id)
    { 
        User::where('id',$id)->delete();

        return redirect('/gebruikers');    
    }

}


?>