<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Document::paginate(10);
        return view('document.index', compact('categorie'));
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
        // dd($request);
        $this->validate($request, [

            'titre' => 'required|string',
            'description' => 'required',
            'document' => 'required',

        ]);

        $document = new Document();

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/documents', $filename);
            $document->document = $filename;
        }

        /*dd($article);*/


        $document->titre = $request->titre;

        $document->description = $request->description;
        $document->save();


        session()->flash('success', 'Le document a été bien créé!');
        return redirect('documents')->with('status', "Le document a été bien créé!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'titre' => 'required|string',
        ]);
        $document = Document::findOrfail($id);

        if ($request->hasFile('document')) {
            $path='assets/uploads/documents'.$document->document;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file =$request->file('document');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/documents',$filename);
            $document->document= $filename;
        }


        /*dd($article);*/


        $document->titre = $request->titre;

        $document->description = $request->description;
        $document->save();

        session()->flash('success', 'Le document a été bien modifié!');
        return redirect('documents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $document = Document::findOrfail($id);
        $document->delete();
        session()->flash('success', 'Suppression du document réussie !');
        return redirect('documents');
    }
}
