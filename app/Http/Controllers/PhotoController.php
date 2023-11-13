<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photo = \App\Models\Photo::all();
        return view('/', compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('update', Photo::class);
        $photo = new Photo();
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $photo = Photo::create($this->validateRequest());
        $this->storeImage($photo);
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        return view('/', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        $this->authorize('update', Photo::class);
        return view('photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        $photo->update($this->validateRequest());
        $this->storeImage($photo);
        return Redirect::to(url()->previous("/"))->with('message', 'Your Page Has Been Updated!');
//        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return Redirect::to(url()->previous("/"));
    }

    private function validateRequest()
    {
        return request()->validate([
            'photoTag' => 'required',
            'image' => 'required|file|image|max:5000',
        ]);
    }

    private function storeImage($photo)
    {
        if (request()->has('image'))
        {
            $photo->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }
}
