<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Information\BaseController;
use App\Http\Requests\Meeting\StoreRequest;
use App\Http\Resources\Meeting\MeetingResource;
use App\Models\Information;
use App\Models\Meeting;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{

    public function __invoke(Information $information)
    {
        $this->service->destroy($information->id);

        return response(null, 204);
    }

}
