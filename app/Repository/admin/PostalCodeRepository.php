<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostalCodeRepository extends Model{


	public function getAllPostalCodeList()
	{
		$stateList = DB::table('mstr_postal_code as st')->select(array('st.id', 'st.city_name', 'st.seo_title', 'st.postal_code','st.postal_area','st.seo_url','st.seo_desc','st.seo_keywords','st.seo_tags','st.active', 'st.country_id as countryId' , 'st.county_id as countyId', 'cn.name as countryVal','cnt.name as countyVal', DB::raw('if(st.active = 1, "True", "False") as active')))
		->join('mstr_country as cn', 'cn.id', '=', 'st.country_id')
		->join('mstr_county as cnt', 'cnt.id', '=', 'st.county_id')
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
		$countyId = $coll->has('countyId') ? $coll->get('countyId') : 0;
		$cityName = $coll->has('city') ? $coll->get('city') : 0;
		$postalCode = $coll->has('postalcode') ? $coll->get('postalcode') : 0;
		$postalArea = $coll->has('postalarea') ? $coll->get('postalarea') : 0;
		$seo_title = $coll->has('seoTitle') ? $coll->get('seoTitle') : 0;
		$seo_url = $coll->has('seoUrl') ? $coll->get('seoUrl') : 0;
		$seo_desc = $coll->has('seoDesc') ? $coll->get('seoDesc') : 0;
		$seo_keywords = $coll->has('seoKeywords') ? $coll->get('seoKeywords') : 0;
		$seo_tags = $coll->has('seoTags') ? $coll->get('seoTags') : 0;

		$query = DB::table('mstr_postal_code')->where('county_id', '=', $countyId);
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(postal_code)'), '=', strtolower(postalCode))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(postal_code)'), '=', strtolower($postalCode));
		}
		$checkPostalCodeExit = $query->count();
		if($checkPostalCodeExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('mstr_postal_code')->where('id', $id)->update(
			['city_name' => $cityName,'postal_code' => $postalCode,'postal_area' => $postalArea, 'country_id' => $countryId, 'county_id' => $countyId, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('mstr_postal_code')->insertGetId(
			['city_name' => $cityName,'postal_code' => $postalCode,'postal_area' => $postalArea, 'country_id' => $countryId, 'county_id' => $countyId, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			//$returnVal = "1";
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('mstr_postal_code')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}