<?php
namespace App\Repository\user;

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
		$user = DB::table('common_seller_details')
		->orWhere(function($query) use ($request_all)
		{
			$query->where('personal_mobile_num', '=', $request_all['username'])
			->orWhere('personal_mail_id', '=', $request_all['username']);
		})
		->where('password', md5($request_all['password']))
		->where('active', 1)->get();

		return $user;
	}

	public function sendForgetPwdMail($userName){
		$user = DB::table('common_seller_details')->select("personal_name", "dumy")
		->orWhere(function($query) use ($userName)
		{
			$query->where('personal_mobile_num', '=', $userName)
			->orWhere('personal_mail_id', '=', $userName);
		})
		->where('active', 1)->get();
		return $user;
	}
}