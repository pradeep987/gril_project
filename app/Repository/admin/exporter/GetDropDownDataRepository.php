<?php 
namespace App\Repository\admin\exporter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetDropDownDataRepository extends Model{

	
	/**
	 * Get contacts collection.
	 *
	 * @return Illuminate\Support\Collection
	 */
	
     
    
    public function getexporterBusinessCategroyList()
	{
		$list = DB::table('mstr_exporter_buss_category')->select(array('id', 'name'))->where('active', 1)->get();
		return $list;
	}
    
    
    public function getexporterBusinessTypeList($id)
	{
		$list = DB::table('mstr_exporter_buss_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
		  $list = $list->where('buss_cat_id', $id);
		}
		$list = $list->get();
		return $list;
	}
    public function getexporterBussinessModel()
	{
		$list = DB::table('mstr_exporter_business_model')->select(array('id', 'name', 'tbl_name'))->where('active', 1)->get();
		return $list;
	}
    public function getexporterProductTypeList($id)
	{
		$list = DB::table('mstr_exporter_prod_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
		  $list = $list->where('buss_type_id', $id);
		}
		$list = $list->get();
		return $list;
	}
}