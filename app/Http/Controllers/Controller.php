<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


function insert(Request $req)
{
    $number= $req->input('number');
    $sim_status=$req->input('sim_status');
    $type=$req->input('type');
    $num_type=$req->input('num_type');
    $price=$req->input('price');

    $data= array('number'=>$number,'sim_status'=>$sim_status,'type'=>$type,'num_type'=>$num_type,'price'=>$price);

    DB::table('mobile_numbers')->insert($data);


    echo 'Data Entered Successfully';

}

}
