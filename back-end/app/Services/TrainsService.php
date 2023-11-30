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

    public function getAllData()
    {
        return $this->trainRepository->get_all();
    }
}
