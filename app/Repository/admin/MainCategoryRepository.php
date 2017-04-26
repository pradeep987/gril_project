<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MainCategoryRepository extends Model{


	public function getAllMainCategoryList()
	{
		$mainCategoryList = DB::table('grl_main_category')->select(array('id', 'name', DB::raw('if(active = 1, "True", "False") as active')))->get();
		return $mainCategoryList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$mainCategory = $coll->has('mainCategory') ? $coll->get('mainCategory') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;

		$query = DB::table('grl_main_category');
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($mainCategory))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($mainCategory));
		}
		$checkMainCategoryExit = $query->count();
		if($checkMainCategoryExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('grl_main_category')->where('id', $id)->update(
			['name' => $mainCategory, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('grl_main_category')->insertGetId(
			['name' => $mainCategory, 'active' => $active]
			);
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('grl_main_category')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}