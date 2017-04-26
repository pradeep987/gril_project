<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StateRepository extends Model{


	public function getAllStateList()
	{
		$stateList = DB::table('grl_state as st')->select(array('st.id', 'st.name', 'st.cntry_id as countryId', 'cn.name as countryVal', DB::raw('if(st.active = 1, "True", "False") as active')))
		->join('grl_country as cn', 'cn.id', '=', 'st.cntry_id')
		->get();
		return $stateList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$state = $coll->has('state') ? $coll->get('state') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$countryId = $coll->has('countryId') ? $coll->get('countryId') : 0;

		$query = DB::table('grl_state')->where('cntry_id', '=', $countryId);
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($state))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($state));
		}
		$checkStateExit = $query->count();
		if($checkStateExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('grl_state')->where('id', $id)->update(
			['name' => $state, 'cntry_id' => $countryId, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('grl_state')->insertGetId(
			['name' => $state, 'cntry_id' => $countryId, 'active' => $active]
			);
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('grl_state')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}