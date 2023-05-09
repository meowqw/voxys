<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Http\Requests\Information\InformationRequest;
use App\Http\Resources\Information\InformationResource;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(InformationRequest $request): InformationResource
    {
        $data = $request->validated();

        $information = $this->service->store($data);

        return new InformationResource($information);
    }
}
