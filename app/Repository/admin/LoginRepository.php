<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginRepository extends Model{


	/**
	 * Get contacts collection.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function userAuthentication($request_all)
	{
		$user = DB::table('admin_users')->where('usr_email', $request_all['username'])->where('usr_pwd', md5($request_all['password']))->where('active', 1)->get();

		return $user;
	}


}