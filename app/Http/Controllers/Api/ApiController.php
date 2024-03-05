<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class ApiController extends Controller
{
    public function roleslist(){
        $data = Role::select('id','title')->where('status',1)->get();
        if($data->count()>0){
            return response(['status'=>true,'rolsData'=>$data]);
        } else {
            return response(['status'=>true,'rolsData'=>$data]);
        }
    }
}
