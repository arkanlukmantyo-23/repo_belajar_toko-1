<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;
use Illuminate\support\Facades\Validator;

class customersController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'nama_customers' => 'required'
            ]
        );

        if($validator->fails()) {
            return Response()->json($validator->errors());
        }

        $ubah = customer::where('id',$id)->update([
           'nama_customer' => $request->nama_customer
]); 
        $simpan = customers::create([
            'nama_customers' => $request->('nama_customers')->get();
        return Response()->json($simpan);        
]);

        if($ubah)
        {
            return Response()->json(['status' => 1]);
        }
        else
        {
            return Response()->json(['status' => 0]);
        }

    }

        if($simpan)
        {
            return Response()->json(['status' => 1]);
        }
        else
        {
            return Response()->json(['status' => 0]);
        }

    }
    
    //
}
