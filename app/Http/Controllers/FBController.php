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

    public function delete (Request $request)
    {
        $validate = Validator::make($request->all(),[
            'profile_id' => 'required',
        ]);

        if($validate->fails()) {
            return response()->json(['status' => $validate->errors()],422);
        }
//        return $validate->validated();

        FBUserInfo::findOrFail($request->profile_id)->delete();

        return response()->json(['status' => 'deleted'],200);
    }
}
