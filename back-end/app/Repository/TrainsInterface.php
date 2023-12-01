<?php

namespace App\Repository;

use Illuminate\Support\Collection;


interface TrainsInterface
{
    public function get_all($current_page);
    public function insert_data($name, $time_start);
    public function find_by_id($id);
    public function delete_by_id($id);

}
