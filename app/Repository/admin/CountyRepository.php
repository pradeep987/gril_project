<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CountyRepository extends Model{


	public function getAllCountyList()
	{
		$stateList = DB::table('mstr_county as st')->select(array('st.id', 'st.name','st.seo_title','st.seo_url','st.seo_desc','st.seo_keywords','st.seo_tags','st.active', 'st.country_id as countryId', 'cn.name as countryVal', DB::raw('if(st.active = 1, "True", "False") as active')))
		->join('mstr_country as cn', 'cn.id', '=', 'st.country_id')
		->get();
		return $stateList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$state = $coll->has('state') ? $coll->get('state') : "";
		$id = $coll->has('id') ? $coll->get('id') : "";
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$countryId = $coll->has('countryId') ? $coll->get('countryId') : 0;
		$countyName = $coll->has('county') ? $coll->get('county') : 0;
		$seo_title = $coll->has('seoTitle') ? $coll->get('seoTitle') : 0;
		$seo_url = $coll->has('seoUrl') ? $coll->get('seoUrl') : 0;
		$seo_desc = $coll->has('seoDesc') ? $coll->get('seoDesc') : 0;
		$seo_keywords = $coll->has('seoKeywords') ? $coll->get('seoKeywords') : 0;
		$seo_tags = $coll->has('seoTags') ? $coll->get('seoTags') : 0;

		$query = DB::table('mstr_county')->where('country_id', '=', $countryId);
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($countyName))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($countyName));
		}
		$checkCountyExit = $query->count();
		if($checkCountyExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('mstr_county')->where('id', $id)->update(
			['name' => strtolower($countyName), 'country_id' => $countryId, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('mstr_county')->insertGetId(
			['name' => strtolower($countyName), 'country_id' => $countryId, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			//$returnVal = "1";
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('mstr_county')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}