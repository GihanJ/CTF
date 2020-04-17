<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlagController extends Controller
{
    public function check_01(Request $request)
    {
        $passed_flag = $request -> flag;
        $db_flag = DB::table('authflag') -> where('Level_Name','Level01')-> value('Level_Flag');

        if ($passed_flag == $db_flag)
        {
            return redirect('/');
        }
        else 
        {
            return back()-> withInput();
        }
    }

    public function check_02(Request $request)
    {
        $passed_flag = $request -> flag;
        $db_flag = DB::table('authflag') -> where('Level_Name','Level02')-> value('Level_Flag');

        if ($passed_flag == $db_flag)
        {
            return redirect('/');
        }
        else 
        {
            return back()-> withInput();
        }
    }

    public function check_03(Request $request)
    {
        $passed_flag = $request -> flag;
        $db_flag = DB::table('authflag') -> where('Level_Name','Level03')-> value('Level_Flag');

        if ($passed_flag == $db_flag)
        {
            return redirect('/');
        }
        else 
        {
            return back()-> withInput();
        }
    }

    public function check_04(Request $request)
    {
        $passed_flag = $request -> flag;
        $db_flag = DB::table('authflag') -> where('Level_Name','Level04')-> value('Level_Flag');

        if ($passed_flag == $db_flag)
        {
            return redirect('/');
        }
        else 
        {
            return back()-> withInput();
        }
    }

}
