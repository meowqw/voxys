<?php

namespace App\Http\Controllers\Meeting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Meeting\StoreRequest;
use App\Http\Resources\Meeting\MeetingResource;
use App\Models\Meeting;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{

    public function __invoke(Meeting $meeting)
    {
        $this->service->destroy($meeting->id);

        return response(null, 204);
    }

}
