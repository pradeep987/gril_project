<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\GetDropDownDataRepository;
use Log;

class GetDropDownData extends Controller
{

	protected $request;

	public function getCountryList(GetDropDownDataRepository $dropDownData)
	{
		$list = $dropDownData->getCountryList();
		return json_encode($list);
	}

	public function getCountyList(GetDropDownDataRepository $dropDownData, $id)
	{
		$list = $dropDownData->getCountyList($id);
		return json_encode($list);
	}

	public function getCityList(GetDropDownDataRepository $dropDownData, $id)
	{
		$cityList = $dropDownData->getCityList($id);
		return json_encode($cityList);
	}

	public function getPostCodeList(GetDropDownDataRepository $dropDownData, $id)
	{
		$postCodeList = $dropDownData->getPostCodeList($id);
		return json_encode($postCodeList);
	}

	public function getMainCategoryList(GetDropDownDataRepository $dropDownData)
	{
		$mainCategoryList = $dropDownData->getMainCategoryList();
		return json_encode($mainCategoryList);
	}

	public function getCategoryList(GetDropDownDataRepository $dropDownData, $id)
	{
		$categoryList = $dropDownData->getCategoryList($id);
		return json_encode($categoryList);
	}

	public function getBusinessCategroyList(GetDropDownDataRepository $dropDownData)
	{
		$list = $dropDownData->getBusinessCategroyList();
		return json_encode($list);
	}

	public function getBusinessTypeList(GetDropDownDataRepository $dropDownData, $id)
	{
		$list = $dropDownData->getBusinessTypeList($id);
		return json_encode($list);
	}

	public function getProductTypeList(GetDropDownDataRepository $dropDownData, $id)
	{
		$list = $dropDownData->getProductTypeList($id);
		return json_encode($list);
	}

	public function getBussinessModel(GetDropDownDataRepository $dropDownData)
	{
		$list = $dropDownData->getBussinessModel();
		return json_encode($list);
	}

}
