<?php


/*
|--------------------------------------------------------------------------
| Necessities
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;
use App\Models\Providers;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Create a new controller instance
|--------------------------------------------------------------------------
*/

class ProviderController extends Controller
{

/*
|--------------------------------------------------------------------------
| Function to get Providers 
|--------------------------------------------------------------------------
*/

    public function getAll(){
        $providers = \App\Models\Providers::get();
        return view('Providers/Providers')->with('providers', $providers);
    }

    public function getProvider($id)
    {
        $providers = Providers::find($id);
        return view('providers/providersEdit')->with('provider', $providers);
    }

    public function getNewProvider() {
        return view('providers/providersCreate');
    }

/*
|--------------------------------------------------------------------------
| Public function to create Provider
|--------------------------------------------------------------------------
*/

    public function createProvider()
    { 
        Providers::create([
            "name"      => $_POST["name"],
        ]);

        return redirect('/providers');    
    }

/*
|--------------------------------------------------------------------------
| Public function to update Provider
|--------------------------------------------------------------------------
*/ 

    public function updateProvider($id)
    { 
        $providers = Providers::where('id',$id)->first();

        $providers->name = request('name');
        
        $providers->save();
        
        return redirect('/providers');    
    }

/*
|--------------------------------------------------------------------------
| Public function to delete Provider
|--------------------------------------------------------------------------
*/
  
    public function deleteProvider($id)
    { 
        Providers::where('id',$id)->delete();

        return redirect('/providers');    
    }
}