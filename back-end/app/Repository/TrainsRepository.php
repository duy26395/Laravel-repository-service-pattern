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

    public function insert_data($name, $time_start)
    {
        return $this->model::create(['name' => $name, 'time_start' => $time_start]);
    }

    public function find_by_id($id)
    {
        return $this->model::find($id);
    }

    public function update_by_id($id, $name, $time_start)
    {
        $modelTrains = $this->model::find($id);
        $modelTrains->name = $name;
        $modelTrains->time_start = $time_start;
        $modelTrains->save();
        return $modelTrains;
    }

    public function delete_by_id($id)
    {
        return $this->model::find($id)->delete();
    }
}
