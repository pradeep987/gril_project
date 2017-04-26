<?php

namespace App\Http\Controllers\admin\hire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\hire\GetDropDownDataRepository;
use Log;

class GetDropDownData extends Controller
{
	
	protected $request;
	   
    //--hire buss type start--
    
    public function getHireBusinessCategroyList(GetDropDownDataRepository $dropDownData)
    {
		$list = $dropDownData->getHireBusinessCategroyList();
		return json_encode($list);
	}
	
    //--hire buss type end--
	public function getHireBusinessTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getHireBusinessTypeList($id);
		return json_encode($list);
	}
    public function getHireProductTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getHireProductTypeList($id);
		return json_encode($list);
	}
}
