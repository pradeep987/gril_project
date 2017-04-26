<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AreaRepository extends Model{


	public function getAllAreaList()
	{
		$areaList = DB::table('grl_area as area')->select(array('area.id', 'area.name', 'area.postal_code as postalCode', 'area.state_id as stateId', 'state.name as stateVal', 'area.city_id as cityId', 'city.name as cityVal', 'area.cntry_id as countryId', 'country.name as countryVal', DB::raw('if(area.active = 1, "True", "False") as active')))
		->join('grl_city as city', 'city.id', '=', 'area.city_id')
		->join('grl_state as state', 'state.id', '=', 'area.state_id')
		->join('grl_country as country', 'country.id', '=', 'area.cntry_id')
		->get();
		return $areaList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$area = $coll->has('area') ? $coll->get('area') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$cityId = $coll->has('cityId') ? $coll->get('cityId') : 0;
		$stateId = $coll->has('cityId') ? $coll->get('stateId') : 0;
		$countryId = $coll->has('countryId') ? $coll->get('countryId') : 0;
		$postalCode = $coll->has('postalCode') ? $coll->get('postalCode') : "";

		$query = DB::table('grl_area');
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(postal_code)'), '=', strtolower($postalCode))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(postal_code)'), '=', strtolower($postalCode));
		}
		$checkAreaExit = $query->count();
		if($checkAreaExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('grl_area')->where('id', $id)->update(
			['name' => $area, 'postal_code' => $postalCode, 'cntry_id' => $countryId, 'state_id' => $stateId, 'city_id' => $cityId, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('grl_area')->insertGetId(
			['name' => $area, 'postal_code' => $postalCode, 'cntry_id' => $countryId, 'state_id' => $stateId, 'city_id' => $cityId, 'active' => $active]
			);
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('grl_area')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}