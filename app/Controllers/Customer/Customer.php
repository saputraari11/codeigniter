<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Customer extends BaseController
{
    public function index()
    {
        echo "hello customer";
    }

    public function customers()
    {
        echo "this is all data";
    }

    public function customer($id=null){
        if($id===null){
            echo "hi anonymus user";
        }
        else if($id==="1"){
            echo "hi ari";
        }else{
            echo "hello everybody";
        }
    }
}
