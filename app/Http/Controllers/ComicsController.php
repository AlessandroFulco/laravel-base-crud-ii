<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public function index()
    {
        $comics = Comic::paginate(3);
        return view('admin.comics.index', compact('comics'));
    }


    public function create()
    {
        return view('admin.comics.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:100',
            'description'   => 'required|string',
            'thumb'         => 'required|string',
            'price'         => 'required|numeric',
            'series'        => 'required|string|max:100',
            'sale_date'     => 'required|date',
            'type'          => 'required|string|max:100',
        ]);

        $formData = $request->all();

        $comic = Comic::create($formData);

        return redirect()->route('comics.show', ['comic' => $comic]);
    }


    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }


    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }


    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->update($formData);

        return redirect()->route('comics.show', compact('comic'));
    }


    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
