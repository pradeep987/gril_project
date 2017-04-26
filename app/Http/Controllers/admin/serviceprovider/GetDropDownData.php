<?php

namespace App\Http\Controllers\admin\serviceprovider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\serviceprovider\GetDropDownDataRepository;
use Log;

class GetDropDownData extends Controller
{
	
	protected $request;
	   
    //--serviceprovider buss type start--
    
    public function getserviceproviderBusinessCategroyList(GetDropDownDataRepository $dropDownData)
    {// echo "a" exit;
		$list = $dropDownData->getserviceproviderBusinessCategroyList();
		return json_encode($list);
	}
	
    //--serviceprovider buss type end--
	public function getserviceproviderBusinessTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getserviceproviderBusinessTypeList($id);
		return json_encode($list);
	}
    public function getserviceproviderProductTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getserviceproviderProductTypeList($id);
		return json_encode($list);
	}
}
