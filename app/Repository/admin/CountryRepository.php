<?php
namespace App\Repository\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CountryRepository extends Model{


	public function getAllCountryList()
	{
		$countryList = DB::table('mstr_country')->select(array('id', 'name', 'seo_title', 'seo_url', 'seo_desc', 'seo_keywords', 'seo_tags', DB::raw('if(active = 1, "True", "False") as active')))->get();
		return $countryList;
	}

	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);

		$country = $coll->has('country') ? $coll->get('country') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$seo_title = $coll->has('seoTitle') ? $coll->get('seoTitle') : 0;
		$seo_url = $coll->has('seoUrl') ? $coll->get('seoUrl') : 0;
		$seo_desc = $coll->has('seoDesc') ? $coll->get('seoDesc') : 0;
		$seo_keywords = $coll->has('seoKeywords') ? $coll->get('seoKeywords') : 0;
		$seo_tags = $coll->has('seoTags') ? $coll->get('seoTags') : 0;

		$query = DB::table('mstr_country');
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($country))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($country));
		}
		$checkCountryExit = $query->count();
		if($checkCountryExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('mstr_country')->where('id', $id)->update(
			['name' => $country, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('mstr_country')->insertGetId(
			['name' => $country, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
		}

		return $returnVal;
	}

	public function deleteItem($id)
	{
		$query = DB::table('mstr_country')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}


}