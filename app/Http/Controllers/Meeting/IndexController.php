<?php

namespace App\Http\Controllers\Meeting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Meeting\StoreRequest;
use App\Http\Resources\Meeting\MeetingResource;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $meetings = $this->service->index();
        return MeetingResource::collection($meetings);

    }

}
