<?php 
namespace App\Repository\admin\serviceprovider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetDropDownDataRepository extends Model{

	
	/**
	 * Get contacts collection.
	 *
	 * @return Illuminate\Support\Collection
	 */
	
     //--serviceprovider buss type start--
    
    public function getserviceproviderBusinessCategroyList()
	{
		$list = DB::table('mstr_serviceprovider_buss_category')->select(array('id', 'name'))->where('active', 1)->get();
		return $list;
	}
    
     //--serviceprovider buss type end--
    public function getserviceproviderBusinessTypeList($id)
	{
		$list = DB::table('mstr_serviceprovider_buss_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
		  $list = $list->where('buss_cat_id', $id);
		}
		$list = $list->get();
		return $list;
	}
    public function getserviceproviderBussinessModel()
	{
		$list = DB::table('mstr_serviceprovider_business_model')->select(array('id', 'name', 'tbl_name'))->where('active', 1)->get();
		return $list;
	}
    public function getserviceproviderProductTypeList($id)
	{
		$list = DB::table('mstr_serviceprovider_prod_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
		  $list = $list->where('buss_type_id', $id);
		}
		$list = $list->get();
		return $list;
	}
}