<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients'));
    }

    public function create()
    {   
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'carteBancaire' => 'required'
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index');
    }

    public function show($numeroClient)
    {
        $client = Client::where('numeroClient', $numeroClient)->firstOrFail();
        return view('clients.show', compact('client'));
    }

    public function edit($numeroClient)
    {
        $client = Client::where('numeroClient', $numeroClient)->firstOrFail();
        return view('clients.edit', compact('client'));
    }

    public function destroy($numeroClient)
    {
        $client = Client::find($numeroClient);
        $client->delete();
        return redirect()->route('clients.index');
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'carteBancaire' => 'required'
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index');
    }

}
