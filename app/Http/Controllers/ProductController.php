<?php


/*
|--------------------------------------------------------------------------
| Necessities
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Create a new controller instance
|--------------------------------------------------------------------------
*/

class ProductController extends Controller
{


/*
|--------------------------------------------------------------------------
| Public function to get providers
|--------------------------------------------------------------------------
*/
    public function makeProduct() {
        $providers = \App\Models\Providers::get();
        return view('producten/producten')->with('providers', $providers);
    }

/*
|--------------------------------------------------------------------------
| Public function to create product 
|--------------------------------------------------------------------------
*/

    public function setProduct() {
        Products::create([
            'email' => $_POST['email'],
            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'],
            'adress' => $_POST['adres'],
            'stad' => $_POST['stad'],
            'postcode' => $_POST['postcode'],
            'telefoonnummer' => $_POST['telefoonnummer'],
            'provider' => $_POST['provider'],
            'pakket' => $_POST['pakket'],
            'betaling' => $_POST['betaling'],
        ]);

        return redirect('/producten'); 
    }
}