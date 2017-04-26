<?php
namespace App\Repository\Dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardRepository extends Model{

	public function getBussinessModel($userSessId)
	{
		if($userSessId > 0){
			$query = DB::table("common_seller_buss_model as csbm")
			->rightJoin("mstr_business_model as mbm", function($join) use($userSessId)
			{
				$join->on("csbm.bm_id", "=", "mbm.id")
				->where('comm_seller_user_id','=', $userSessId);
			})
			->select("comm_seller_user_id", "mbm.id", "mbm.name", "mbm.short_name", "mbm.icon")
			->orderBy("comm_seller_user_id", "desc")
			->orderBy("name", "asc")->get();
				
			return $query;
		}
	}

	public function activeDashboardMenu($id, $userSessId)
	{
		$query = DB::table("mstr_business_model")->select("name", "tbl_name")->where('id','=', $id)->get();
		if($query[0]->name && $query[0]->tbl_name){
			DB::table('common_seller_buss_model')->insert(
			['comm_seller_user_id' => $userSessId, 'bm_id' => $id, 'bm_name' => $query[0]->name]
			);
			DB::statement('INSERT INTO '.$query[0]->tbl_name.' (comm_seller_user_id,name,description,clasification,title,mobile,landline,email,website,logo,number_or_name,address_1,address_2,city,county,postal_code,latitude,longitude,goog_map_city,goog_map_region,goog_map_street,goog_map_district,goog_map_country,goog_map_postalcode,goog_map_city_short,goog_map_region_short,goog_map_street_short,goog_map_district_short,goog_map_country_short,goog_map_postalcode_short,active,updated_dtm,created_dtm)
				  SELECT comm_seller_user_id,name,description,clasification,title,mobile,landline,email,website,logo,number_or_name,address_1,address_2,city,county,postal_code,latitude,longitude,goog_map_city,goog_map_region,goog_map_street,goog_map_district,goog_map_country,goog_map_postalcode,goog_map_city_short,goog_map_region_short,goog_map_street_short,goog_map_district_short,goog_map_country_short,goog_map_postalcode_short,active,updated_dtm,created_dtm
				  FROM dummy_user_profile WHERE comm_seller_user_id='.$userSessId);
		}
	}
}