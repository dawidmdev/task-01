<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function all();
    public function show($id);
    public function create($params);
    public function update($id, $params);
}
