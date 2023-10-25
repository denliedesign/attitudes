<?php

namespace App\Http\Controllers;

use App\Mail\TrialMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trial = request()->validate([
            'parentName' => 'required',
            'studentName' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'birthdate' => 'required',
        ]);

        Mail::to('customdenlie@gmail.com')->send(new TrialMail($trial));

        return redirect('/')->with('message', 'Thanks for your interest. We\'ll be in touch.');
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
