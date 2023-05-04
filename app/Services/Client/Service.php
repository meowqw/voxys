<?php

namespace App\Services\Client;

use App\Models\Client;

class Service
{
    public function store(array $data)
    {
        return Client::firstOrCreate(['phone' => $data['phone']], $data);
    }

    public function index()
    {
        return Client::all();
    }
}
