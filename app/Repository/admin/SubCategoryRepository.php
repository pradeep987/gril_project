<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubCategoryRepository extends Model{


	public function getAllSubCategoryList()
	{
		$subCategoryList = DB::table('grl_sub_category as subCategory')->select(array('subCategory.id', 'subCategory.name', 'subCategory.main_cate_id as mcId', 'mc.name as mcVal', 'subCategory.cate_id as categoryId', 'category.name as categoryVal', DB::raw('if(subCategory.active = 1, "True", "False") as active')))
		->join('grl_category as category', 'category.id', '=', 'subCategory.cate_id')
		->join('grl_main_category as mc', 'mc.id', '=', 'subCategory.main_cate_id')
		->get();
		return $subCategoryList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$subCategory = $coll->has('subCategory') ? $coll->get('subCategory') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$categoryId = $coll->has('categoryId') ? $coll->get('categoryId') : 0;
		$mcId = $coll->has('mcId') ? $coll->get('mcId') : 0;

		$query = DB::table('grl_sub_category')->where('cate_id', '=', $categoryId);
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($subCategory))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($subCategory));
		}
		$checkSubCategoryExit = $query->count();
		if($checkSubCategoryExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('grl_sub_category')->where('id', $id)->update(
			['name' => $subCategory, 'main_cate_id' => $mcId, 'cate_id' => $categoryId, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('grl_sub_category')->insertGetId(
			['name' => $subCategory, 'main_cate_id' => $mcId, 'cate_id' => $categoryId, 'active' => $active]
			);
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('grl_sub_category')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}