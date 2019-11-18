<?php

namespace App\Http\Controllers;

use App\Model\produit;
use App\Model\category;
use App\Model\panier;
use App\Model\profile;
use App\Model\users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
/*
      $users = new users();
      $users->name = "oue";
      $users->email = "oue@etna-alternance.net";
      $users->password = "oue";

      //$ouela = $users->where('name','ouela');
      //dd($ouela);

      //$ouela = $users->where('name','ouela');
      //dd($ouela->get());


      //dd($users->all());
      $users->save();
*/

      $produit = new produit();
      $produit->categorie_name = "voiture";
      $produit->produit_name = "mercedes";
      $produit->picture = "mercedes benz amg";
      $produit->description = "mercedes benz amg";
      $produit->stock_dispo = 23;
      $produit->quantite = 2;
      $produit->add_panier = 1;
      $produit->direct_buy = 0;
      dd($produit->all());
      $produit->save();


      $category = new category();
      $category->category_name = "voiture";
      $category->produit_name = "mercedes";
      $category->view = 0;
      $category->direct_buy = 0;
      $category->produit_id = 23;
      //dd($category->all());
      $category->save();


      $produit = new panier();
      $panier->category_name = "voiture";
      $panier->produit_name = "mercedes";
      $panier->picture = "mercedes benz amg";
      $panier->description = "mercedes benz amg";
      $panier->quantite = 23;
      $panier->price = 2;
      $panier->buy = 1;
      //dd($panier->all());
      $panier->save();


      $profile = new profile();
      $profile->username = "root";
      $profile->email = "root@gmail.com";
      $profile->password = "toor";
      $profile->admin = 1;
      dd($profile->all());
      $profile->save();



        return view('home');
    }
}
