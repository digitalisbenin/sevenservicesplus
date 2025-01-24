<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Site;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index23(Request $request) {

        // $commande = Commande::all();
        // $temoignage = Temoignage::orderBy('created_at', 'desc')->take(3)->get();
        
        
        $query = Article::query();
        
        $keyword = $request->filled('keyword');
        $min_price = $request->filled('min_price');

        if($request->filled('categorie_id') && $request->categorie_id !== '') {
            $query->where('site_id', $request->categorie_id);
        }
        if($min_price && $min_price !== '') {
            $query->where('promo_price', '>=', $request->min_price);
        }
        if($keyword && $keyword !== '') {
            $query->where('name', 'LIKE', '%'.$request->keyword.'%');
        }

      
        $products = $query->paginate(12);

        $categories = Site::all();

        return view('parcelle', compact('products', 'categories'));
    }
}
