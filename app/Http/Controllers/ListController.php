<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class ListController extends Controller
{
    //
    function list() {
    	$user_data = Users::all();
        $res_data = [];
        $no = 0;
        foreach ($user_data as $key => $value) {
            $res_data[$no]['name']      = $value->name;
            $res_data[$no]['age']       = $value->age;
            $res_data[$no]['dob']       = $value->dob;
            $res_data[$no]['firstName'] = $value->first_name;
            $res_data[$no]['lastName']  = $value->last_name;
            $res_data[$no]['more'][$no]['address_line1'] = $value->address_line1;
            $res_data[$no]['more'][$no]['address_line2'] = $value->address_line2;
            $res_data[$no]['more'][$no]['address_line3'] = $value->address_line3;
            $res_data[$no]['more'][$no]['"phone']        = $value->phone;
            $no++;
        }
        return $res_data;
    }
}
