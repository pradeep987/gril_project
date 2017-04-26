<?php

namespace App\Http\Controllers\admin\exporter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\exporter\GetDropDownDataRepository;
use Log;

class GetDropDownData extends Controller
{
	
	protected $request;
	   
    //--exporter buss type start--
    
    public function getexporterBusinessCategroyList(GetDropDownDataRepository $dropDownData)
    {
		$list = $dropDownData->getexporterBusinessCategroyList();
		return json_encode($list);
	}
	
    //--exporter buss type end--
	public function getexporterBusinessTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getexporterBusinessTypeList($id);
		return json_encode($list);
	}
    public function getexporterProductTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getexporterProductTypeList($id);
		return json_encode($list);
	}
}
