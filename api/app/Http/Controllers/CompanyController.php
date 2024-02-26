<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Repositories\CompanyRepositoryInterface;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(public CompanyRepositoryInterface $companyRepository) {}
    public function store(CompanyRequest $request) {
        try {
            $data = $request->all();
            $model = $this->companyRepository->create($data);
            return response()->success($model);
        }catch (\ErrorException $e) {
            return response()->error($e->getCode());
        }
    }
    public function update(CompanyRequest $request, int $companyId) {
        try {
            $data = $request->all();
            $model = $this->companyRepository->update($companyId, $data);
            return response()->success($model);
        }catch (\ErrorException $e) {
            return response()->error($e->getCode());
        }
    }
    public function show(int $companyId) {
        $model = $this->companyRepository->show($companyId);
        return response()->success($model);
    }
    public function remove(int $companyId) {
        try {
            $model = $this->companyRepository->remove($companyId);
            return response()->success($model);
        }catch (\ErrorException $e) {
            return response()->error($e->getCode());
        }
    }
}
