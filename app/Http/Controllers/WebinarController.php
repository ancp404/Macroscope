<?php

namespace App\Http\Controllers;
use App\Models\Webinar;
use App\Http\Requests\WebinarRequest;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    //READ
    public function index()
    {
        return view('webinar.index',[
            'webinars' => Webinar::paginate(4),
        ]);
    }

    //INSERT
    public function insert()
    {
        $this->authorize('admin');
        return view('webinar.insert');
    }

    public function store(WebinarRequest $data)
    {
        $this->authorize('admin');
        Webinar::create($data->all());
        return back()->with('success','Webinar berhasil terinput :D');
    }

    //UPDATE
    public function edit(Webinar $webinar)
    {
        $this->authorize('admin');
        return view('webinar.edit',[
            'webinar' => $webinar,
        ]);
    }
    public function update(WebinarRequest $data, $id)
    {
        $this->authorize('admin');
        Webinar::find($id)->update([
            'title' => $data->title,
            'speaker' => $data->speaker,
            'link' => $data->link,
            'date' => $data->date,
        ]);
        return back()->with('success','Webinar berhasil teredit :)');
    }

    //DELETE
    public function destroy($id)
    {
        $this->authorize('admin');
        Webinar::find($id)->delete();
        return redirect('webinar');
    }
}
