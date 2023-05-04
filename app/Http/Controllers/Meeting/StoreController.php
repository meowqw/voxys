<?php

namespace App\Http\Controllers\Meeting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Meeting\StoreRequest;
use App\Http\Resources\Meeting\MeetingResource;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): MeetingResource
    {
        $data = $request->validated();

        $meeting = $this->service->store($data);

        return new MeetingResource($meeting);

    }

}
