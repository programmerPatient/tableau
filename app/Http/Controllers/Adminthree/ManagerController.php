<?php

namespace App\Http\Controllers\Adminthree;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Manager;

class ManagerController extends Controller
{
    //管理员列表操作
    public function index(){
        //查询数据
        $data = Manager::get();
        return view('admin3.manager.index',compact('data'));
    }
}
