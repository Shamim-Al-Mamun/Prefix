<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $clients = Client::all();
        return view('pages.dashboard.clients.all', compact('clients'));
    }

    public function addnew()
    {
        return view('pages.dashboard.clients.addnew');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|string',
            'client_logo' => 'required|file',
        ]);

        $client = new Client();
        $client->title = $request->title;
        if ($request->file('client_logo')) {
            $client_logo  = $request->file('client_logo');
            Storage::putFile('public/img/', $client_logo);
            $client->client_logo = "storage/img/" . $client_logo->hashName();
        }
        $client->save();
        return redirect()->route('admin.clients.all')->with('success', "Client has been added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('pages.dashboard.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            // 'client_logo' => 'required|file',
        ]);


        $client =  Client::find($id);
        $client->title = $request->title;

        if ($request->file('client_logo')) {
            $client_logo  = $request->file('client_logo');
            Storage::putFile('public/img/', $client_logo);
            $client->client_logo = "storage/img/" . $client_logo->hashName();
        }


        $client->save();

        return redirect()->route('admin.clients.all')->with('success', "Client has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { {
            $client =  Client::find($id);
            $client->delete();

            return redirect()->route('admin.clients.all')->with('success', 'client Deleted successfully');
        }
    }
}
