<?php

namespace App\Repositories;

class BaseRepository implements BaseRepositoryInterface
{
    private $model;

    function __construct($model) {
        $this->model = $model;
    }

    public function model() {
        return $this->model;
    }

    public function all()
    {
        return $this->model()->get();
    }

    public function show($id)
    {
        return $this->model()->findOrFail($id);
    }

    public function create($params)
    {
        return $this->model()->create($params);
    }

    public function update($id, $params)
    {
        return $this->model()->find($id)->update($params);
    }
}
