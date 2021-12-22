<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Impl\BaseRepositoryInterface;
use Illuminate\Contracts\Cache\Repository;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->model->all();
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
        return $this->model->findOrFail($id);
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $this->model->where("id", $id)->delete();
    }
}
