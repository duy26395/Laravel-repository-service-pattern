<?php

namespace App\Repository;

use App\Repository\TrainsInterface;
use App\Repository\BaseRepository;
use App\Models\Train;


class TrainsRepository extends BaseRepository implements TrainsInterface
{
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param Train $trains
     */
    public function __construct(Train $trains)
    {
        parent::__construct($trains);
    }

    /**
     * @return Collection
     */
    public function get_all()
    {
        return $this->model->all();
    }
}
