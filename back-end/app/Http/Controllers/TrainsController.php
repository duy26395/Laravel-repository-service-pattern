<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataResource;
use App\Repository\TrainsRepository;
use App\Services\TrainsService;

class TrainsController extends Controller
{
    //
    protected $trainRepository;
    protected $trainsService;
    /**
     * Instantiate controller instance.
     */
    public function __construct(TrainsRepository $trainRepository)
    {
        $this->trainsService = new TrainsService($trainRepository);
    }

    public function index()
    {
        $res = $this->trainsService->getAllData();

        return new DataResource($res);
    }
}
