<?php

use App\Http\Controllers\AccueilArticleController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\LivreursController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PubliciteController;
use App\Http\Controllers\DocumentController;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Livreur;
use App\Models\Site;
use Illuminate\Support\Facades\Auth;
use App\Models\Temoignage;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     $commande = Commande::all();
//     $categorie = Categorie::where('status','1')->get();
//     $article = Article::where('status','1')->get();
//     $articlee = Article::where('status','1')->take(30)->get();
//     $temoignage = Temoignage::orderBy('created_at', 'desc')->take(3)->get();
//     return view('accueil', compact('categorie', 'article','commande','temoignage','articlee'));
// });

Route::get('/', function () {
    // $commande = Commande::all();
    $categorie = Site::all();
    $articlee = Article::with('site')->where('normal_price', '>=', 300000 )->where('disponible', '1')->take(8)->get();
    $article = Article::with('site')->where('disponible','1')->where('vedette', '1')->take(4)->get();
    // $temoignage = Temoignage::orderBy('created_at', 'desc')->take(3)->get();
    return view('accueil', compact('categorie','articlee','article'));
});

Route::get('/accueil', function () {
    // $commande = Commande::all();
    $categorie = Site::all();
    $articlee = Article::with('site')->where('normal_price', '>=', 300000 )->take(8)->get();
    $article = Article::with('site')->where('disponible','1')->where('vedette', '1')->take(4)->get();
    // $temoignage = Temoignage::orderBy('created_at', 'desc')->take(3)->get();
    return view('accueil', compact('categorie','articlee','article'));
});

Route::get("/location", function(){
    return view('location');
});

Route::get('/register', function () {
    return redirect('/login');
});
Route::get('/parcelle/{category?}', [ProductController::class, 'index23'])->name('getSol');
// Route::get('/parcelle', [ProductController::class, 'index23']);
/*Route::get('/accueil', [AccueilArticleController::class, 'index']);*/

Route::get('/contact', function () {
    return view('contact');
 })->name('contact');

 Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');



// Route::get('/shop', function () {
//     return view('shop.shop');
// });
// // Route::get('/mes-commandes', function () {
// //     return view('shop.commande');
// // });

// Route::get('/about', function () {
//     return view('about.about');
// });
// Route::get('/partenaire', function () {
//     return view('partenaire.partenaire');
// });

// Route::get('/signin', function () {
//     return view('authentication.signin');
// });



// Route::get('/signup', function () {
//     return view('authentication.signup');
// });

// Route::get('/forgot', function () {
//     return view('authentication.forgot-password');
// });

// Route::get('/dashboard', function () {
//     $categorie = Site::all();
//     $article = Article::where('disponible','1')->get();
//     $articlee = Article::where('disponible','1')->take(30)->get();
//     // $commande = Commande::all();
//     // $temoignage = Temoignage::orderBy('created_at', 'desc')->take(3)->get();
//     return view('dashboard', compact('categorie', 'article','articlee'));
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->role_id == 1) {
        $categorie = Site::all();
        $article = Article::where('disponible', '1')->get();
        $articlee = Article::where('disponible', '1')->take(30)->get();

        return view('dashboard', compact('categorie', 'article', 'articlee'));
    } else {
        return redirect('/documents');
    }
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('admin-panel', function () {
//     $categorie = Categorie::all();
//     $article = Article::all();
//     // $commandes = Commande::orderBy('created_at', 'desc')->take(5)->get();


//     // $commande = Commande::all();
//     // $livreur = Livreur::all();
//     return view('dashboard', compact('categorie', 'article'));
// });

// Route::get('categorie-detail', function () {
//     return view('all_categories_page.category_details');
// });

// Route::get('categorie-details', [\App\Http\Controllers\CategorieDetailController::class, 'detailcategorie']);
// Route::get('categorie-details/{slug}', [\App\Http\Controllers\CategorieDetailController::class, 'detailcategorie']);

// Route::get('details-article', function () {
//     return view('all_products_page.details_article');
// });

// Route::get('details-article/{slug}/{codeArticle}', [\App\Http\Controllers\CategorieDetailController::class, 'detailarticle']);

// Route::middleware('auth')->group(function () {
//     Route::get('/inscription', [App\Http\Controllers\HomeController::class, 'register']);
//     Route::get('/utilisateur', [App\Http\Controllers\HomeController::class, 'user']);
//     Route::get('/mon-panier', [App\Http\Controllers\CartController::class, 'index']);
//     Route::post('/update-total', [App\Http\Controllers\CheckoutController::class, 'updateTotal']);
//     Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
//     Route::post('/placer-commande', [App\Http\Controllers\CheckoutController::class, 'store']);
//     Route::get('/mes-commandes', [App\Http\Controllers\CheckoutController::class, 'create']);
//     Route::get('/details-commande/{id}', [App\Http\Controllers\CheckoutController::class, 'show']);
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//   /*---------------------Commande-----------------------------*/
//   Route::get('/commande', [\App\Http\Controllers\CommandesController::class, 'index']);
//   Route::get('/historique', [\App\Http\Controllers\CommandesController::class, 'create']);
//   Route::get('/voir-commande/{id}', [App\Http\Controllers\CommandesController::class, 'show']);
//   Route::put('/update-commande/{id}', [App\Http\Controllers\CommandesController::class, 'update']);
//   Route::put('/updates-commande/{id}', [App\Http\Controllers\CommandesController::class, 'updates']);



//   Route::post('/order', [\App\Http\Controllers\CheckoutController::class, 'placeOrder'])->name('order.place');
//   Route::post('/order/payment/callback', [\App\Http\Controllers\CheckoutController::class, 'handlePaymentCallback'])->name('order.payment.callback');

  /*----------------------commentaire-------------------------*/
//   Route::post('create-commentaire', [CommentairesController::class, 'store']);
//   Route::get('commentaires', [CommentairesController::class, 'index']);
// });

/*Route::middleware(['auth'])->group(function () {Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index']);
    Route::get('/accueil', [AccueilController::class, 'index']);

});*/

/*------------------------ Cart ----------------------------*/

//     Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'store']);
//     Route::get('/load-cart-data', [App\Http\Controllers\CartController::class, 'create']);
//     Route::post('/delete-cart-item', [App\Http\Controllers\CartController::class, 'destroy']);
//     Route::post('/update-cart', [App\Http\Controllers\CartController::class, 'update']);


// /*-------------------------Favoris------------------------------*/
// Route::get('/load-wishlist-data', [App\Http\Controllers\FavorisController::class, 'create']);
// Route::post('/add-to-wishlist', [App\Http\Controllers\FavorisController::class, 'store']);
// Route::post('/remove-wishlist-item', [App\Http\Controllers\FavorisController::class, 'destroy']);

/*------------------------ Articles ----------------------------*/
Route::get('articles', [ArticlesController::class, 'index']);
Route::get('create-article', [ArticlesController::class, 'create']);
Route::post('create-new-article', [ArticlesController::class, 'store']);
Route::get('articles/{id}/edit', [ArticlesController::class, 'edit']);
Route::put('articles/{id}/update', [ArticlesController::class, 'update']);
Route::get('articles/{id}/destroy', [ArticlesController::class, 'destroy']);


/*------------------------ Documents ----------------------------*/
Route::get('documents', [DocumentController::class, 'index']);
Route::get('create-documents', [DocumentController::class, 'create']);
Route::post('create-new-documents', [DocumentController::class, 'store']);
Route::get('documents/{id}/edit', [DocumentController::class, 'edit']);
Route::put('documents/{id}/update', [DocumentController::class, 'update']);
Route::get('documents/{id}/destroy', [DocumentController::class, 'destroy']);

/*------------------------ Categories ----------------------------*/
Route::get('categories', [CategoriesController::class, 'index']);
Route::get('created-categories', [CategoriesController::class, 'create']);
Route::post('create-categorie', [CategoriesController::class, 'store']);
Route::get('categories/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('categories/{id}/update', [CategoriesController::class, 'update']);
Route::get('categories/{id}/destroy', [CategoriesController::class, 'destroy']);

// /*------------------------ Commentaires ----------------------------*/

// Route::get('created-commentaires', [CommentairesController::class, 'create']);

// Route::get('commentaires/{id}/edit', [CommentairesController::class, 'edit']);
// Route::put('commentaires/{id}/update', [CommentairesController::class, 'update']);
// Route::get('commentaires/{id}/destroy', [CommentairesController::class, 'destroy']);

// /*------------------------ Favoris ----------------------------*/
// Route::get('favoris', [FavorisController::class, 'index']);
// Route::get('created-favoris', [FavorisController::class, 'create']);
// Route::post('create-favoris', [FavorisController::class, 'store']);
// Route::get('favoris/{id}/edit', [FavorisController::class, 'edit']);
// Route::put('favoris/{id}/update', [FavorisController::class, 'update']);
// Route::get('favoris/{id}/destroy', [FavorisController::class, 'destroy']);

// /*------------------------ Livreurs ----------------------------*/
// Route::get('livreurs', [LivreursController::class, 'index']);
// Route::get('created-livreurs', [LivreursController::class, 'create']);
// Route::post('create-livreur', [LivreursController::class, 'store']);
// Route::get('livreurs/{id}/edit', [LivreursController::class, 'edit']);
// Route::put('livreurs/{id}/update', [LivreursController::class, 'update']);
// Route::get('livreurs/{id}/destroy', [LivreursController::class, 'destroy']);

// /*------------------------ Paiements ----------------------------*/
// Route::get('paiements', [PaiementController::class, 'index']);
// Route::get('created-paiements', [PaiementController::class, 'create']);
// Route::post('create-paiement', [PaiementController::class, 'store']);
// Route::get('paiements/{id}/edit', [PaiementController::class, 'edit']);
// Route::put('paiements/{id}/update', [PaiementController::class, 'update']);
// Route::get('paiements/{id}/destroy', [PaiementController::class, 'destroy']);

// /*-----------------------Temoignages-------------------------------*/
// Route::post('/temoignages', [App\Http\Controllers\TemoignageController::class, 'store']);

// /*------------------------ publicités ----------------------------*/
// Route::get('publicites', [PubliciteController::class, 'index']);
// Route::get('created-publicites', [PubliciteController::class, 'create']);
// Route::post('create-publicites', [PubliciteController::class, 'store']);
// Route::get('publicites/{id}/edit', [PubliciteController::class, 'edit']);
// Route::put('publicites/{id}/update', [PubliciteController::class, 'update']);
// Route::get('publicites/{id}/destroy', [PubliciteController::class, 'destroy']);


require __DIR__.'/auth.php';
