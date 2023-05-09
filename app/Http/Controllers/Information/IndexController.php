<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Http\Requests\Information\InformationRequest;
use App\Http\Resources\Information\InformationResource;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $information = $this->service->index();
        return InformationResource::collection($information);

    }
}
