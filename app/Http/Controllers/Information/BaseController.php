<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Services\Information\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }


}
