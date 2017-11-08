<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\View;

class ClientController extends Controller
{
	public function index()
	{
		$clients = Client::all();
		return view('clients', ['clients' => $clients]);
	}

	public function single($id)
	{
		$client = Client::where('id', $id)->get()->first();
		//return view('single-client')->with('client', $client);
		//return view('single-client', $client);

		return view('single-client', ['client' => $client]);
	}

	public function create(Request $request)
	{
		$client = new Client;
		$client->name = $request->input('client-name');
		$client->website_url = $request->input('website-url');
		$client->save();

		return response()->json([
    		'response' => 'success'
		]);
	}
}