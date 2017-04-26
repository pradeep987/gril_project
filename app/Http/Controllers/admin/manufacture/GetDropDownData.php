<?php

namespace App\Http\Controllers\admin\manufacture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\manufacture\GetDropDownDataRepository;
use Log;

class GetDropDownData extends Controller
{
	
	protected $request;
	   
    //--manufacture buss type start--
    
    public function getmanufactureBusinessCategroyList(GetDropDownDataRepository $dropDownData)
    {
		$list = $dropDownData->getmanufactureBusinessCategroyList();
		return json_encode($list);
	}
	
    //--manufacture buss type end--
	public function getmanufactureBusinessTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getmanufactureBusinessTypeList($id);
		return json_encode($list);
	}
    public function getmanufactureProductTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getmanufactureProductTypeList($id);
		return json_encode($list);
	}
}
