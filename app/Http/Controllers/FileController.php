<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Http\Requests\FileStoreRequest;

class FileController extends Controller
{
    //取得所有
    public function index()
    {
        $files = File::get();

        return $files;
    }

    //取得特定
    public function show($id)
    {
        $file = File::find($id);

        return $file;
    }

    //新增
    public function store(FileStoreRequest $request)
    {
        $data = $request->validated();//改成透過Files$FileStoreRequest驗證

        $file = File::create($data);

        return $file;
    }

    //更新
    //為什麼這邊變數一定要寫$File
    public function update(File $file, FileStoreRequest $request)
    {
        $data = $request->validated();

        $file -> update($data);

        return $file;
    }
    
    //刪除
    public function destroy(File $file, Request $request)
    {
        $file -> delete();

        return $file;
    }
}
