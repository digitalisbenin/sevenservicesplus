<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Console\Style\success;
use Illuminate\Support\Facades\File;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article = Article::paginate(10);
        return view('all_products_page.all_products_page', compact('article'));
    }

    public function indexe()
    {
        //
        //$article = Article::with('categorie')->where('status','1')->get();
        $article = Article::where('status','1')->get();
        return response()->json(['success'=>true, 'article'=>$article],200);
    }


    public function indexes($id)
    {
        //
        $article = Article::where('status','1')->where('categorie_id',$id)->get();
        return response()->json(['success'=>true, 'article'=>$article],200);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorie = Site::all();
        return view('all_products_page.add_new_product', compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'site_id' => 'required',
            'name' => 'required|string',
            'details' => 'required|string',
            'vedette' => 'required',
            'disponible' => 'required',
            'area' => 'required',
            'normal_price' => 'required',
            'promo_price' => 'required',
        ]);

        $article = new Article();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/articles_images', $filename);
            $article->image = $filename;
        }

        /*dd($article);*/

        $article->site_id = $request->site_id;
        $article->name = $request->name;
        $article->details = $request->details;
        $article->vedette = $request->vedette == TRUE ? '1' : '0';
        $article->disponible = $request->disponible == TRUE ? '1' : '0';
        $article->normal_price = $request->normal_price;
        $article->promo_price = $request->promo_price;
        $article->area = $request->area;
        $article->save();


        session()->flash('success', 'La parcelle a été bien créé!');
        return redirect('articles')->with('status', "La parcelle a été bien créé!");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article = Article::findOrfail($id);
        return view('articles.index', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorie=Site::all();
        $article = Article::findOrfail($id);
        //dd($article);
        return view('articles.index', compact('article','categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $article = Article::findOrfail($id);

        if ($request->hasFile('image')) {
            $path='assets/uploads/articles_images'.$article->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file =$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/articles_images',$filename);
            $article->image= $filename;
        }
        $article->site_id = $request->site_id;
        $article->name = $request->name;
        $article->details = $request->details;
        $article->vedette = $request->vedette == TRUE ? '1' : '0';
        $article->disponible = $request->disponible == TRUE ? '1' : '0';
        $article->normal_price = $request->normal_price;
        $article->promo_price = $request->promo_price;
        $article->area = $request->area;
        $article->save();

        session()->flash('success', 'La parcelle a été bien modifié!');
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article = Article::findOrfail($id);
        $article->delete();
        session()->flash('success', 'La parcelle a été supprimé!');
        return redirect('articles');
    }
}
