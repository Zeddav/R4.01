<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'carteBancaire' => 'required'
        ]);

        $client = Client::create($validatedData);

        return response()->json($client, Response::HTTP_CREATED);
    }

    public function show($numeroClient)
    {
        $client = Client::find($numeroClient);
        if(!$client){
            return response()->json(["message"=> "Client inexistant"],404);
        }
        return response()->json($client);
    }


    public function destroy($numeroClient)
    {
        $client = Client::find($numeroClient);
        if(!$client){
            return response()->json(["message"=> "Client inexistant"],404);
        }
        $client->delete();
        return response()->json(['message' => 'Client deleted successfully'], Response::HTTP_NO_CONTENT);
    }

    public function update(Request $request, $numeroClient)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'carteBancaire' => 'required'
        ]);

        $client = Client::find($numeroClient);

        if(!$client){
            return response()->json(["message"=> "Client inexistant"],404);
        }
        $client->update($validatedData);
        return response()->json($client);
    }
}
