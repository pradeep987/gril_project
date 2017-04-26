<?php
namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GetDropDownDataRepository extends Model{


	/**
	 * Get contacts collection.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getCountryList()
	{
		$list = DB::table('mstr_country')->select(array('id', 'name'))->where('active', 1)->get();
		return $list;
	}

	public function getCountyList($id)
	{
		$list = DB::table('mstr_county')->select(array('id', 'name'))->where('active', 1);
		if($id > 0 && is_numeric($id)){
			$list = $list->where('country_id', $id);
		}
		$list = $list->get();
		return $list;
	}

	public function getCityList($id)
	{
		$cityList = DB::table('grl_city')->select(array('id', 'state_id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
			$cityList = $cityList->where('state_id', $id);
		}
		$cityList = $cityList->get();
		return $cityList;
	}

	public function getPostCodeList($id)
	{
		$postCodeList = DB::table('grl_area')->select(array('id', 'city_id', 'name', 'postal_code'))->where('active', 1);
		if ($id > 0) {
			$postCodeList = $postCodeList->where('city_id', $id);
		}
		$postCodeList = $postCodeList->get();
		return $postCodeList;
	}

	public function getMainCategoryList()
	{
		$mainCategoryList = DB::table('grl_main_category')->select(array('id', 'name'))->where('active', 1)->get();
		return $mainCategoryList;
	}

	public function getCategoryList($id)
	{
		$categoryList = DB::table('grl_category')->select(array('id', 'name'))->where('active', 1);
		if($id > 0 && is_numeric($id)){
			$categoryList = $categoryList->where('main_cate_id', $id);
		}
		$categoryList = $categoryList->get();
		return $categoryList;
	}

	public function getBusinessCategroyList()
	{
		$list = DB::table('mstr_buss_category')->select(array('id', 'name'))->where('active', 1)->get();
		return $list;
	}

	public function getBusinessTypeList($id)
	{
		$list = DB::table('mstr_buss_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
			$list = $list->where('buss_cat_id', $id);
		}
		$list = $list->get();
		return $list;
	}

	public function getProductTypeList($id)
	{
		$list = DB::table('mstr_prod_type')->select(array('id', 'name'))->where('active', 1);
		if ($id > 0 && is_numeric($id)) {
			$list = $list->where('buss_type_id', $id);
		}
		$list = $list->get();
		return $list;
	}

	public function getBussinessModel()
	{
		$list = DB::table('mstr_business_model')->select(array('id', 'name', 'tbl_name'))->where('active', 1)->get();
		return $list;
	}
}