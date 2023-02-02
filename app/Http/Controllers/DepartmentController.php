<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\DepartmentStoreRequest;

class DepartmentController extends Controller
{
    //取得所有
    public function index()
    {
        $departments = Department::get();

        return $departments;
    }

    //取得特定
    public function show(Department $department)
    {
        return $department;
    }

    //新增
    public function store(DepartmentStoreRequest $request)
    {
        $data = $request->validated();//改成透過departments$departmentstoreRequest驗證

        $department = Department::create($data);

        return $department;
    }
    //更新
    //為什麼這邊變數一定要寫$department
    public function update(Department $department, DepartmentStoreRequest $request)
    {
        $data = $request->validated();

        $department -> update($data);

        return $department;
    }
    //刪除
    public function destroy(Department $department, Request $request)
    {
        $department -> delete();

        return $department;
    }
}
