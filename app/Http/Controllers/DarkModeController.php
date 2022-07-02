<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DarkModeController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function switch($id)
    {

        if (Auth::user()->dark == 0) {
            DB::table('users')->where('id',$id)->update(array(
                'dark'=>1,));
        }elseif (Auth::user()->dark == 1) {
            DB::table('users')->where('id',$id)->update(array(
                'dark'=>0,));
        }
        return back();
    }
}
