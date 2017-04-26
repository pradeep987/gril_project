<?php
namespace App\Repository\Dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Crypt;

class GetProfileDataRepository extends Model{

	public function getRetailerProfileData($userSessId)
	{
		if($userSessId > 0){
			$query = DB::table('ret_user_profile')->where("comm_seller_user_id","=",$userSessId)->get();
				
			return $query;
		}
	}

	public function saveMyBussReg($data, $userSessId)
	{
		$data = json_decode($data, true);
		$coll = collect($data);
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$id = Crypt::decrypt($id);

		if(is_numeric($id) && $id > 0){
			DB::table('ret_user_profile')->where('id', $id)->update(['title' => $coll->get('title'), 'clasification' => $coll->get('clasification'), 'description' => $coll->get('description')]);
			$returnVal = "update";
		}

		return $returnVal;
	}

	public function saveMyBussProf($data, $userSessId)
	{
		$data = json_decode($data, true);
		$coll = collect($data);
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$id = Crypt::decrypt($id);

		if(is_numeric($id) && $id > 0){
			DB::table('ret_user_profile')->where('id', $id)->update(
			['mobile' => $coll->get('mobile'), 'landline' => $coll->get('landline'), 'email' => $coll->get('email'), 'website' => $coll->get('website'),
				 'name' => $coll->get('bussName'), 'number_or_name' => $coll->get('numberName'), 'address_1' => $coll->get('address_1'), 
				 'address_2' => $coll->get('address_2'), 'postal_code' => $coll->get('postal_code'), 'city' => $coll->get('city'), 'county' => $coll->get('county')]
			);
			$returnVal = "update";
		}

		return $returnVal;
	}

	public function saveGoogleMapLocation($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$id = Crypt::decrypt($id);

		if(is_numeric($id) && $id > 0){
			DB::table('ret_user_profile')->where('id', $id)->update(
			['goog_map_city' => $coll->get('map_city'), 'goog_map_region' => $coll->get('map_region'), 'goog_map_street' => $coll->get('map_street'), 'goog_map_district' => $coll->get('map_district'),
				 'goog_map_country' => $coll->get('map_country'), 'goog_map_postalcode' => $coll->get('map_postalcode'), 'goog_map_city_short' => $coll->get('map_city_short'), 'goog_map_region_short' => $coll->get('map_region_short'), 
				 'goog_map_street_short' => $coll->get('map_street_short'), 'goog_map_district_short' => $coll->get('map_district_short'), 
				 'goog_map_country_short' => $coll->get('map_country_short'), 'goog_map_postalcode_short' => $coll->get('map_postalcode_short'), 
				 'latitude' => $coll->get('latitude'), 'longitude' => $coll->get('longitude')]
			);
			$returnVal = "update";
		}

		return $returnVal;
	}

}