<?php

namespace App\Http\Controllers\admin\importer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\importer\GetDropDownDataRepository;
use Log;

class GetDropDownData extends Controller
{
	
	protected $request;
	   
    //--importer buss type start--
    
    public function getimporterBusinessCategroyList(GetDropDownDataRepository $dropDownData)
    {
		$list = $dropDownData->getimporterBusinessCategroyList();
		return json_encode($list);
	}
	
    //--importer buss type end--
	public function getimporterBusinessTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getimporterBusinessTypeList($id);
		return json_encode($list);
	}
    public function getimporterProductTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getimporterProductTypeList($id);
		return json_encode($list);
	}
}
