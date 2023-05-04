<?php

namespace App\Services\Meeting;

use App\Models\Meeting;

class Service
{
    public function store(array $data)
    {
        return Meeting::updateOrCreate(['client_id' => $data['client_id']], $data);
    }

    public function index()
    {
        return Meeting::all();
    }

    public function destroy(int $id): void
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->delete();
    }
}
