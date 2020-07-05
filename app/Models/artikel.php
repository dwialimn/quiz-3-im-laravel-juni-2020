<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Artikel
{
    public static function get_id($id)
    {
        $get_ida = DB::table('artikels')->where('id',$id)->first();
        return $get_ida;
    }

    public static function get_data()
    {
        $data = DB::table('artikels')->get();
        return $data;
    }

    public static function destroy($id){
        $data = DB::table('artikels')->where('id',$id)->delete();
        return $data;
    }
}