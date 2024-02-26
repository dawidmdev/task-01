<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyEmployeeRequest;
use App\Repositories\CompanyEmployeeRepositoryInterface;

class CompanyEmployeeController extends Controller
{
    public function __construct(public CompanyEmployeeRepositoryInterface $companyEmployeeRepository) {}
    public function store(CompanyEmployeeRequest $request) {
        try {
            $data = $request->all();
            $model = $this->companyEmployeeRepository->create($data);
            return response()->success($model);
        } catch (\ErrorException $e) {
            return response()->error($e->getCode());
        }
    }
    public function update(CompanyEmployeeRequest $request, int $employeeId) {
        try {
            $data = $request->all();
            $model = $this->companyEmployeeRepository->update($employeeId, $data);
            return response()->success($model);
        } catch (\ErrorException $e) {
            return response()->error($e->getCode());
        }
    }
    public function show(int $employeeId) {
        $model = $this->companyEmployeeRepository->show($employeeId);
        return response()->success($model);
    }
    public function remove(int $employeeId) {
        try {
            $model = $this->companyEmployeeRepository->remove($employeeId);
            return response()->success($model);
        }catch (\ErrorException $e) {
            return response()->error($e->getCode());
        }
    }
}
