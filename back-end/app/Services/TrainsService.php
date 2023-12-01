<?php

namespace App\Services;

use App\Repository\TrainsRepository;

class TrainsService
{
    protected $trainRepository;

    public function __construct(TrainsRepository $trainRepository)
    {
        $this->trainRepository = $trainRepository;
    }

    public function getAllData($current_page)
    {
        return $this->trainRepository->get_all($current_page);
    }

    public function insertData($request)
    {
        return $this->trainRepository->insert_data($request->name, $request->time_start);
    }

    public function findById($id)
    {
        return $this->trainRepository->find_by_id($id);
    }

    public function updateById($id, $request)
    {
        return $this->trainRepository->update_by_id($id, $request->name, $request->time_start);
    }

    public function deleteById($id)
    {
        return $this->trainRepository->delete_by_id($id);
    }
}
