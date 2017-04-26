<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CityRepository extends Model{


	public function getAllCityList()
	{
		$cityList = DB::table('grl_city as city')->select(array('city.id', 'city.name', 'city.cntry_id as countryId', 'country.name as countryVal', 'city.state_id as stateId', 'state.name as stateVal', DB::raw('if(city.active = 1, "True", "False") as active')))
		->join('grl_state as state', 'state.id', '=', 'city.state_id')
		->join('grl_country as country', 'country.id', '=', 'city.cntry_id')
		->get();
		return $cityList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$city = $coll->has('city') ? $coll->get('city') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$stateId = $coll->has('stateId') ? $coll->get('stateId') : 0;
		$countryId = $coll->has('countryId') ? $coll->get('countryId') : 0;

		$query = DB::table('grl_city')->where('state_id', '=', $stateId);
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($city))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($city));
		}
		$checkCityExit = $query->count();
		if($checkCityExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('grl_city')->where('id', $id)->update(
			['name' => $city, 'cntry_id' => $countryId, 'state_id' => $stateId, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('grl_city')->insertGetId(
			['name' => $city, 'cntry_id' => $countryId, 'state_id' => $stateId, 'active' => $active]
			);
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('grl_city')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}