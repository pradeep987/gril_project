<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryRepository extends Model{


	public function getAllCategoryList()
	{
		$categoryList = DB::table('grl_category as cat')->select(array('cat.id', 'cat.name', 'cat.main_cate_id as mcId', 'mc.name as mcVal', DB::raw('if(cat.active = 1, "True", "False") as active')))
		->join('grl_main_category as mc', 'mc.id', '=', 'cat.main_cate_id')
		->get();
		return $categoryList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$category = $coll->has('category') ? $coll->get('category') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$mcId = $coll->has('mcId') ? $coll->get('mcId') : 0;

		$query = DB::table('grl_category')->where('main_cate_id', '=', $mcId);
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($category))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($category));
		}
		$checkCategoryExit = $query->count();
		if($checkCategoryExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('grl_category')->where('id', $id)->update(
			['name' => $category, 'main_cate_id' => $mcId, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('grl_category')->insertGetId(
			['name' => $category, 'main_cate_id' => $mcId, 'active' => $active]
			);
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('grl_category')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}