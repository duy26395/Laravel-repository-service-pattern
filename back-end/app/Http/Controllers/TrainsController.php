<?php

namespace App\Http\Controllers;

use App\Http\Resources\PerPageResource;
use App\Repository\TrainsRepository;
use App\Services\TrainsService;
use App\http\Requests\TrainsCreateRequest;
use App\http\Requests\TrainsUpdateRequest;
use App\Http\Resources\DataResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


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

    public function index(Request $request)
    {
        $res = $this->trainsService->getAllData($request->current_page);

        return new PerPageResource($res);
    }

    public function create(TrainsCreateRequest $request)
    {
        $res = $this->trainsService->insertData($request);
        return new DataResource($res);
    }

    public function show($id)
    {
        $res = $this->trainsService->findById($id);
        return new DataResource($res);
    }

    public function update($id, TrainsUpdateRequest $request)
    {
        $res = $this->trainsService->updateById($id, $request);
        return new DataResource($res);
    }

    public function destroy($id)
    {
        $this->trainsService->deleteById($id);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
