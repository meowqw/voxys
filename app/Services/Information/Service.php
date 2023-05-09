<?php

namespace App\Services\Information;

use App\Models\Information;

class Service
{
    public function store(array $data)
    {
        return Information::create($data);
    }

    public function index()
    {
        return Information::all();
    }

    public function destroy(int $id): void
    {
        $information = Information::findOrFail($id);
        $information->delete();
    }
}
