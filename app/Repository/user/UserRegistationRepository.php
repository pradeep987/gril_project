<?php
namespace App\Repository\user;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserRegistationRepository extends Model{

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);
		$query = DB::table('common_seller_details');
		$query = $query->Where('personal_mobile_num', '=', $coll->get('personalMobileNum'));
		if($coll->get('personalEmailId'))
		$query = $query->orwhere(DB::raw('LOWER(personal_mail_id)'), '=', strtolower($coll->get('personalEmailId')));

		$checkUserExit = $query->count();
		if($checkUserExit > 0){
			return "exsit";
		}
		$id = DB::table('common_seller_details')->insertGetId(
		['personal_name' => $coll->get('personName'), 'personal_mobile_num' => $coll->get('personalMobileNum'),
				'personal_mail_id' => $coll->get('personalEmailId'), 'password' => md5($coll->get('accPwd')), 'dumy' => $coll->get('accPwd'), 'active' => 1]
		);

		if($id > 0){
			$cnt = 0;
			foreach($coll->get('bussModel') as $key=>$val){
				if($val == 1){//exit;
					$value= explode(";",$key);
					DB::table('common_seller_buss_model')->insert(
					['comm_seller_user_id' => $id, 'bm_id' => $value[0], 'bm_name' => $value[1]]
					);
					DB::table($value[2])->insert(
					['comm_seller_user_id' => $id, 'name' => $coll->get('companyName'), 'description' => $coll->get('description'), 'title' => $coll->get('title'), 'clasification' => $coll->get('classifcation'), 'mobile' => $coll->get('personalMobileNum'), 'email' => $coll->get('personalEmailId'), 'website' => $coll->get('comWebsite'), 'number_or_name' => $coll->get('addressNo'), 'address_1' => $coll->get('addr1'), 'address_2' => $coll->get('addr2'), 'postal_code' => $coll->get('postalCode'), 'city' => $coll->get('city'), 'county' => $coll->get('county'), 'latitude' => $coll->get('latitude'), 'longitude' => $coll->get('longitude'), 'goog_map_city' => $coll->get('map_city'), 'goog_map_region' => $coll->get('map_region'), 'goog_map_street' => $coll->get('map_street'), 'goog_map_district' => $coll->get('map_district'), 'goog_map_country' => $coll->get('map_country'), 'goog_map_postalcode' => $coll->get('map_postalcode'),
						'goog_map_country' => $coll->get('map_country'), 'goog_map_postalcode' => $coll->get('map_postalcode'), 'goog_map_city_short' => $coll->get('map_city_short'), 'goog_map_region_short' => $coll->get('map_region_short'), 
						'goog_map_street_short' => $coll->get('map_street_short'), 'goog_map_district_short' => $coll->get('map_district_short'), 
						'goog_map_country_short' => $coll->get('map_country_short'), 'goog_map_postalcode_short' => $coll->get('map_postalcode_short'), 'active' => 1]
					);
					if($cnt == 0){
						$cnt++;
						DB::table("dummy_user_profile")->insert(
						['comm_seller_user_id' => $id, 'name' => $coll->get('companyName'), 'description' => $coll->get('description'), 'title' => $coll->get('title'), 'clasification' => $coll->get('classifcation'), 'mobile' => $coll->get('personalMobileNum'), 'email' => $coll->get('personalEmailId'), 'website' => $coll->get('comWebsite'), 'number_or_name' => $coll->get('addressNo'), 'address_1' => $coll->get('addr1'), 'address_2' => $coll->get('addr2'), 'postal_code' => $coll->get('postalCode'), 'city' => $coll->get('city'), 'county' => $coll->get('county'), 'latitude' => $coll->get('latitude'), 'longitude' => $coll->get('longitude'), 'goog_map_city' => $coll->get('map_city'), 'goog_map_region' => $coll->get('map_region'), 'goog_map_street' => $coll->get('map_street'), 'goog_map_district' => $coll->get('map_district'), 'goog_map_country' => $coll->get('map_country'), 'goog_map_postalcode' => $coll->get('map_postalcode'),
							'goog_map_country' => $coll->get('map_country'), 'goog_map_postalcode' => $coll->get('map_postalcode'), 'goog_map_city_short' => $coll->get('map_city_short'), 'goog_map_region_short' => $coll->get('map_region_short'), 
							'goog_map_street_short' => $coll->get('map_street_short'), 'goog_map_district_short' => $coll->get('map_district_short'), 
							'goog_map_country_short' => $coll->get('map_country_short'), 'goog_map_postalcode_short' => $coll->get('map_postalcode_short'), 'active' => 1]
						);
					}
				}
			}
			return $id;
		}
		return "Insertion Failure";
	}

}