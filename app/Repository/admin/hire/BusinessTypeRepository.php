<?php 
namespace App\Repository\admin\hire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BusinessTypeRepository extends Model{

	
	public function getAllBusinessTypeList()
	{
		$businessTypeList = DB::table('mstr_hire_buss_type as bt')->select(array('bt.id', 'bt.name', 'bt.buss_cat_id as bcId', 'bc.name as bcVal', 'bt.seo_title', 'bt.seo_url', 'bt.seo_desc', 'bt.seo_keywords', 'bt.seo_tags', DB::raw('if(bt.active = 1, "True", "False") as active')))
			->join('mstr_hire_buss_category as bc', 'bc.id', '=', 'bt.buss_cat_id')->get();
        
		return $businessTypeList;
	}
	
	public function saveItem($data)
	{
		$data = json_decode($data, true);
		$coll = collect($data);
		
        $businessType = $coll->has('businessType') ? $coll->get('businessType') : "";
		$id = $coll->has('id') ? $coll->get('id') : 0;
		$bcId = $coll->has('bcId') ? $coll->get('bcId') : 0;
        //$bcId = 1;
        
		$active = $coll->has('active') ? $coll->get('active') : 0;
		$seo_title = $coll->has('seoTitle') ? $coll->get('seoTitle') : 0;
		$seo_url = $coll->has('seoUrl') ? $coll->get('seoUrl') : 0;
		$seo_desc = $coll->has('seoDesc') ? $coll->get('seoDesc') : 0;
		$seo_keywords = $coll->has('seoKeywords') ? $coll->get('seoKeywords') : 0;
		$seo_tags = $coll->has('seoTags') ? $coll->get('seoTags') : 0;
		
		$query = DB::table('mstr_hire_buss_type')->where('buss_cat_id', '=', $bcId);
		if(is_numeric($id) && $id > 0){//echo "1";
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($businessType))->where('id', '!=', $id);
		}else{//echo "2";
			$query = $query->where(DB::raw('LOWER(name)'), '=', strtolower($businessType));
		}
        
        $checkBusinessTypeExit = $query->count();
        
        
		if($checkBusinessTypeExit > 0){//echo "3";
			return "exsit";
		}
        
		if(is_numeric($id) && $id > 0){//echo "4";
			DB::table('mstr_hire_buss_type')->where('id', $id)->update(
				['buss_cat_id' => $bcId, 'name' => $businessType, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
			$returnVal = "update";
		}else{//echo "5";
              
              
			 $returnVal = DB::table('mstr_hire_buss_type')->insertGetId(
				['buss_cat_id' => $bcId, 'name' => $businessType, 'seo_title' => $seo_title, 'seo_url' => $seo_url, 'seo_desc' => $seo_desc, 'seo_keywords' => $seo_keywords, 'seo_tags' => $seo_tags, 'active' => $active]
			);
              
		}
		
		return $returnVal;
	}
	
	public function deleteItem($id)
	{
		$query = DB::table('mstr_hire_buss_type')->where('id', '=', $id)->delete();
		$id = 0;
		if($query){
			$id = 1;
		}
		return $id;
	}
	

}