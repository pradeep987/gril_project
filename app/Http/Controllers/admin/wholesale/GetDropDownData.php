<?php

namespace App\Http\Controllers\admin\wholesale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\wholesale\GetDropDownDataRepository;
use Log;

class GetDropDownData extends Controller
{
	
	protected $request;
	   
    //--wholesale buss type start--
    
    public function getwholesaleBusinessCategroyList(GetDropDownDataRepository $dropDownData)
    {
		$list = $dropDownData->getwholesaleBusinessCategroyList();
		return json_encode($list);
	}
	
    //--wholesale buss type end--
	public function getwholesaleBusinessTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getwholesaleBusinessTypeList($id);
		return json_encode($list);
	}
    public function getwholesaleProductTypeList(GetDropDownDataRepository $dropDownData, $id)
    {
		$list = $dropDownData->getwholesaleProductTypeList($id);
		return json_encode($list);
	}
}
