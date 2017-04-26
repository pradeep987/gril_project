<?php 
namespace App\Repository\admin\hire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetDropDownDataRepository extends Model{

	
	/**
	 * Get contacts collection.
	 *
	 * @return Illuminate\Support\Collection
	 */
	
     //--hire buss type start--
    
    public function getHireBusinessCategroyList()
	{
		$list = DB::table('mstr_hire_buss_category')->select(array('id', 'name'))->where('active', 1)->get();
		return $list;
	}
    
     //--hire buss type end--
    public function getHireBusinessTypeList($id)
	{
		$list = DB::table('mstr_hire_buss_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
		  $list = $list->where('buss_cat_id', $id);
		}
		$list = $list->get();
		return $list;
	}
    public function getHireBussinessModel()
	{
		$list = DB::table('mstr_hire_business_model')->select(array('id', 'name', 'tbl_name'))->where('active', 1)->get();
		return $list;
	}
    public function getHireProductTypeList($id)
	{
		$list = DB::table('mstr_hire_prod_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
		  $list = $list->where('buss_type_id', $id);
		}
		$list = $list->get();
		return $list;
	}
}