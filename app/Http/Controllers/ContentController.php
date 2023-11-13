<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = \App\Models\Content::all();
        return view('/', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('update', Content::class);
        $content = new Content();
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $content = Content::create($this->validateRequest());
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        return view('/', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        $this->authorize('update', Content::class);
        return view('contents.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        $content->update($this->validateRequest());
        return Redirect::to(url()->previous("/"))->with('message', 'Your Page Has Been Updated!');
//        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        $content->delete();
        return Redirect::to(url()->previous("/"));
    }

    private function validateRequest()
    {
        return request()->validate([
            'tag' => 'required',
            'text' => 'required',
        ]);
    }
}
