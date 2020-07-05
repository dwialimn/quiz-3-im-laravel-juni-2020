<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class User
{

	public static function get_data(){
		$data = DB::table('users')->get();
		return $data;
	}

	public static function save($data){
		unset($data['_token']);
		$simpan = DB::table('users')->insert($data);
		return $simpan;
	}
}
