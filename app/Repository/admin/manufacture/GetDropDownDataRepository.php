<?php 
namespace App\Repository\admin\manufacture;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetDropDownDataRepository extends Model{

	
	/**
	 * Get contacts collection.
	 *
	 * @return Illuminate\Support\Collection
	 */
	
     //--manufacture buss type start--
    
    public function getmanufactureBusinessCategroyList()
	{
		$list = DB::table('mstr_manufacture_buss_category')->select(array('id', 'name'))->where('active', 1)->get();
		return $list;
	}
    
     //--manufacture buss type end--
    public function getmanufactureBusinessTypeList($id)
	{
		$list = DB::table('mstr_manufacture_buss_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
		  $list = $list->where('buss_cat_id', $id);
		}
		$list = $list->get();
		return $list;
	}
    public function getmanufactureBussinessModel()
	{
		$list = DB::table('mstr_manufacture_business_model')->select(array('id', 'name', 'tbl_name'))->where('active', 1)->get();
		return $list;
	}
    public function getmanufactureProductTypeList($id)
	{
		$list = DB::table('mstr_manufacture_prod_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
		  $list = $list->where('buss_type_id', $id);
		}
		$list = $list->get();
		return $list;
	}
}