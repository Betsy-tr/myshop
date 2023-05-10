<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($categorie = 0)
    {
        //
        $produits = Produit::orderBy('created_at','desc')->paginate(10); // Liste des produits
        $categories = Categorie::orderBy('name','asc')->get(); // Liste des categories

        if ($categorie != 0) {
            $produits = Produit::where('categorie_id', $categorie)->orderBy('created_at','desc')->paginate(10) ; 
        } 

        return view('welcome',compact('produits','categories'));
    }

    // Permet d'afficher le détail du produit mais aussi les produits similaires
    public function detail(Produit $produit)
    {
        
        $produits = Produit::where('categorie_id', $produit->categorie_id)
                          -> inRandomOrder()->limit(4)->get(); // Sélectionner les 4 produits similaires de la catégorie aléatoirement 
        
        return view('detail', compact('produit', 'produits'));
    }

    /*
    *  Méthode qui permet d'jouter au caddie, contrôle l'existence du produit et met à jour la quantité
    */
    public function addToCart(Produit $produit)
    {
        /* On vérifie l'existence du produit dans le panier 
           SELECT * FROM Cart WHERE user_id = " ? " AND produit_id = $produit -> id LIMIT (0 , 1) ;
        */ 

        $cart = Cart::where('user_id', Auth::user()->id)
                   -> where('produit_id', $produit->id)
                   -> limit(1)->get();

        dd($cart);

        //return Redirect::route('accueil.detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
