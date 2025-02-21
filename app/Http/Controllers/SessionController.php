<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource 
     */
    public function index()
    {
        return view('sessions.index');
    }

    /**
     * Show the form for creating a new resource (Page de connexion).
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage (Effectuer la connexion).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended('/home');
        }

        return back()->withErrors(['email' => 'Les identifiants fournis sont incorrects.']);
    }

    /**
     * Display the specified resource (Afficher les détails de la session active).
     */
    public function show(string $id)
    {
        return view('sessions.show', ['user' => Auth::user()]);
    }

    /**
     * Show the form for editing the specified resource (Modifier les paramètres de la session).
     */
    public function edit(string $id)
    {
    
        return view('sessions.edit', ['user' => Auth::user()]);
    }


    /**
     * Remove the specified resource from storage (Se déconnecter de la session).
     */
    public function destroy(string $id)
    {
        Auth::logout();
        return redirect('/login');
    }
}
