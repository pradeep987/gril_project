<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BusinessModelRepository extends Model{


	public function getAllBusinessModelList()
	{
		$businessModelList = DB::table('mstr_business_model')->select(array('id', 'name', 'tbl_name', 'short_name', 'icon', 'seo_title', 'seo_url', 'seo_desc', 'seo_keywords', 'seo_tags', DB::raw('if(active = 1, "True", "False") as active')))->get();
		return $businessModelList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$businessModel = $coll->has('businessModel') ? $coll->get('businessModel') : "";
		$tblName = $coll->has('tblName') ? $coll->get('tblName') : "";
		$shortName = $coll->has('shortName') ? $coll->get('shortName') : "";
		$iconName = $coll->has('iconName') ? $coll->get('iconName') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$seo_title = $coll->has('seoTitle') ? $coll->get('seoTitle') : 0;
		$seo_url = $coll->has('seoUrl') ? $coll->get('seoUrl') : 0;
		$seo_desc = $coll->has('seoDesc') ? $coll->get('seoDesc') : 0;
		$seo_keywords = $coll->has('seoKeywords') ? $coll->get('seoKeywords') : 0;
		$seo_tags = $coll->has('seoTags') ? $coll->get('seoTags') : 0;

		$query = DB::table('mstr_business_model');
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($businessModel))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($businessModel));
		}
		$checkBusinessModelExit = $query->count();
		if($checkBusinessModelExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('mstr_business_model')->where('id', $id)->update(
			['name' => $businessModel, 'tbl_name' => $tblName, 'short_name' => $shortName, 'icon' => $iconName, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			DB::table('common_seller_buss_model')->where('bm_id', $id)->update(
			['bm_name' => $businessModel]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('mstr_business_model')->insertGetId(
			['name' => $businessModel, 'tbl_name' => $tblName, 'short_name' => $shortName, 'icon' => $iconName, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('mstr_business_model')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}