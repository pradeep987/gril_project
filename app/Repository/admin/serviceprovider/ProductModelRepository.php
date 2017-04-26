<?php 
namespace App\Repository\admin\serviceprovider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModelRepository extends Model{

	
	public function getAllProductModelList()
	{
		$productModelList = DB::table('mstr_serviceprovider_prod_model as pm')->select(array('pm.id', 'pm.name', 'pm.buss_cat_id as bcId', 'bc.name as bcVal', 'pm.buss_type_id as btId', 'bt.name as btVal', 'pm.prod_type_id as ptId', 'pt.name as ptVal', 'pm.seo_title', 'pm.seo_url', 'pm.seo_desc', 'pm.seo_keywords', 'pm.seo_tags', DB::raw('if(pm.active = 1, "True", "False") as active')))
			->join('mstr_serviceprovider_buss_category as bc', 'bc.id', '=', 'pm.buss_cat_id')
			->join('mstr_serviceprovider_buss_type as bt', 'bt.id', '=', 'pm.buss_type_id')
			->join('mstr_serviceprovider_prod_type as pt', 'pt.id', '=', 'pm.prod_type_id')->get();
		return $productModelList;
	}
	
	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);
		
		$productModel = $coll->has('productModel') ? $coll->get('productModel') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$bcId = $coll->has('bcId') ? $coll->get('bcId') : 0;
		$btId = $coll->has('btId') ? $coll->get('btId') : 0;
		$ptId = $coll->has('ptId') ? $coll->get('ptId') : 0;
		
		$bussCategoryName = $coll->has('bussCategoryName') ? $coll->get('bussCategoryName') : "";
		$bussTypeName = $coll->has('bussTypeName') ? $coll->get('bussTypeName') : "";
		$prodTypeName = $coll->has('prodTypeName') ? $coll->get('prodTypeName') : "";
		
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$seo_title = $coll->has('seoTitle') ? $coll->get('seoTitle') : 0;
		$seo_url = $coll->has('seoUrl') ? $coll->get('seoUrl') : 0;
		$seo_desc = $coll->has('seoDesc') ? $coll->get('seoDesc') : 0;
		$seo_keywords = $coll->has('seoKeywords') ? $coll->get('seoKeywords') : 0;
		$seo_tags = $coll->has('seoTags') ? $coll->get('seoTags') : 0;
		
		$query = DB::table('mstr_serviceprovider_prod_model')->where('prod_type_id', '=', $ptId);
		if(is_numeric($id) && $id > 0){
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($productModel))->where('id', '!=', $id);
		}else{
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($productModel));
		}
		$checkProductModelExit = $query->count();
		if($checkProductModelExit > 0){
			return "exsit";
		}
		if(is_numeric($id) && $id > 0){
			DB::table('mstr_serviceprovider_prod_model')->where('id', $id)->update(
				['buss_cat_id' => $bcId, 'buss_type_id' => $btId, 'prod_type_id' => $ptId, 'buss_cat_name' => $bussCategoryName, 'buss_type_name' => $bussTypeName, 'prod_type_name' => $prodTypeName, 'name' => $productModel, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			$returnVal = "update";
		}else{
			$returnVal = DB::table('mstr_serviceprovider_prod_model')->insertGetId(
				['buss_cat_id' => $bcId, 'buss_type_id' => $btId, 'prod_type_id' => $ptId, 'buss_cat_name' => $bussCategoryName, 'buss_type_name' => $bussTypeName, 'prod_type_name' => $prodTypeName, 'name' => $productModel, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
		}
		
		return $returnVal;
	}
	
	public function deleteItem($id)
	{
		$query = DB::table('mstr_serviceprovider_prod_model')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}
	

}