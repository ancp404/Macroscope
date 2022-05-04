<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Http\Requests\ArtikelRequest;

class ArtikelController extends Controller
{
    //READ
    public function index()
    {
        return view('artikel.index',[
            'artikels' => Artikel::paginate(3),
        ]);
    }

    public function show(Artikel $artikel)
    {
        return view('artikel.show',[
            'artikel' => $artikel,
        ]);
    }

    //INSERT
    public function insert()
    {
        $this->authorize('admin');
        return view('artikel.insert');
    }

    public function store(ArtikelRequest $data)
    {
        $this->authorize('admin');
        Artikel::create($data->all());
        return back()->with('success','Artikel berhasil terinput :D');
    }

    //UPDATE
    public function edit(Artikel $artikel)
    {
        $this->authorize('admin');
        return view('artikel.edit',[
            'artikel' => $artikel,
        ]);
    }

    public function update(ArtikelRequest $data, $id)
    {
        $this->authorize('admin');
        Artikel::find($id)->update([
            'title' => $data->title,
            'author' => $data->author,
            'content' => $data->content,
        ]);
        return back()->with('success','Artikel berhasil teredit :)');
    }

    //DELETE
    public function destroy($id)
    {
        $this->authorize('admin');
        Artikel::find($id)->delete();
        return redirect('artikel');
    }
}
