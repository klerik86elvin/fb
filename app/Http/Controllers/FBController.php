<?php

namespace App\Http\Controllers;

use App\Models\FBUserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FBController extends Controller
{
    public function add(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'profile_id' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);

        if($validate->fails()) {
            return response()->json(['status' => $validate->errors()],422);
        }


        FBUserInfo::create($validate->validated());

    }
}
