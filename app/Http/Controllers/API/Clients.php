<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\API\ClientRequest;

class Clients extends Controller
{

    public function index()
    {
        return Client::all();
    }

    public function store(ClientRequest $request)
    {
        // get all the request data
        // returns an array of all the data the user sent
        $data = $request->all();
        // create client with data and store in DB
        // and return it as JSON
        // automatically gets 201 status as it's a POST request
        return Client::create($data);
    }


    public function show(Client $client)
    {
        return $client;
    }


    public function update(ClientRequest $request, Client $client)
    {
        // get the request data
        $data = $request->all();
        // update the article using the fill method
        // then save it to the database
        $client->fill($data)->save();
        
        // return the updated version
        return $client;
    }


    public function destroy(Client $client)
    {
        // delete client from DB
        $client->delete();

        // use a 204 code as there is no content in response
        return response(null, 204);
    }
}
