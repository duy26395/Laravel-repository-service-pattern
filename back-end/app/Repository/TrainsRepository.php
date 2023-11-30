<?php

namespace App\Repository;

use App\Repository\TrainsInterface;
use App\Repository\BaseRepository;
use App\Models\Train;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

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
    public function get_all(): LengthAwarePaginator
    {
        return $this->model->paginate($this->model::PER_PAGE);
    }
}
