<?php

namespace App\Http\Controllers;

use App\Repository\TrainsRepository;


class TrainsController extends Controller
{
    //
    protected $trainRepository;
    /**
     * Instantiate controller instance.
     */
    public function __construct(TrainsRepository $trainRepository)
    {
        $this->trainRepository = $trainRepository;
    }

    public function index()
    {
        $res = $this->trainRepository->get_all();
        return response()->json($res);
    }
}
