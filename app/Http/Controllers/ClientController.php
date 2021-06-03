<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    //
    public function index() {                
        $clients = Client::all();        
        $pageContent = 'Llista de Clients';
        return view('client.index', compact('pageContent', 'clients'));
    }   

    public function show($id) {
        $client = Client::findOrFail($id);
        $pageContent = 'Vista Detall Client';
        return view('client.show', compact('pageContent', 'client'));
    }

}
