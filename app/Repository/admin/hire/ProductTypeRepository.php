<?php 
namespace App\Repository\admin\hire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductTypeRepository extends Model{

	
	public function getAllProductTypeList()
	{
		$productTypeList = DB::table('mstr_hire_prod_type as pt')->select(array('pt.id', 'pt.name', 'pt.buss_cat_id as bcId', 'bc.name as bcVal', 'pt.buss_type_id as btId', 'bt.name as btVal', 'pt.seo_title', 'pt.seo_url', 'pt.seo_desc', 'pt.seo_keywords', 'pt.seo_tags', DB::raw('if(pt.active = 1, "True", "False") as active')))
			->join('mstr_hire_buss_category as bc', 'bc.id', '=', 'pt.buss_cat_id')
			->join('mstr_hire_buss_type as bt', 'bt.id', '=', 'pt.buss_type_id')->get();
		return $productTypeList;
	}
	
	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);
		
		$productType = $coll->has('productType') ? $coll->get('productType') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$bcId = $coll->has('bcId') ? $coll->get('bcId') : 0;
		$btId = $coll->has('btId') ? $coll->get('btId') : 0;
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$seo_title = $coll->has('seoTitle') ? $coll->get('seoTitle') : 0;
		$seo_url = $coll->has('seoUrl') ? $coll->get('seoUrl') : 0;
		$seo_desc = $coll->has('seoDesc') ? $coll->get('seoDesc') : 0;
		$seo_keywords = $coll->has('seoKeywords') ? $coll->get('seoKeywords') : 0;
		$seo_tags = $coll->has('seoTags') ? $coll->get('seoTags') : 0;
		
		$query = DB::table('mstr_hire_prod_type')->where('buss_type_id', '=', $btId);
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($productType))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($productType));
		}
		$checkProductTypeExit = $query->count();
		if($checkProductTypeExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('mstr_hire_prod_type')->where('id', $id)->update(
				['buss_cat_id' => $bcId, 'buss_type_id' => $btId, 'name' => $productType, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('mstr_hire_prod_type')->insertGetId(
				['buss_cat_id' => $bcId, 'buss_type_id' => $btId, 'name' => $productType, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
		}
		
		return $returnVal;
	}
	
	public function deleteItem($id)
	{
		$query = DB::table('mstr_hire_prod_type')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}
	

}