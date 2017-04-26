<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\AreaRepository;
use Validator;
use Log;

class Area extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'countryId'=>'required|integer',
			'stateId'=>'required|integer',
			'cityId'=>'required|integer',
			'area'=>'required|max:64|min:2',
			'postalCode'=>'required|max:8|min:6',
			'active'=>'required|boolean'
			];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getAllAreaList(AreaRepository $areaRepository)
	{
		$areaList = $areaRepository->getAllAreaList();
		return json_encode($areaList);
	}
	public function saveItem(AreaRepository $areaRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		Area::rules(), Area::messages()
		);

		if ($validator->fails()) {
			return json_encode(Area::messages());
		}
		$areaList = $areaRepository->saveItem($request->getContent());
		if($areaList > 0 && is_numeric($areaList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($areaList == 'exsit')
		return json_encode(['errorMsg'    => 'Sub Category already exsit']);
		elseif($areaList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(AreaRepository $areaRepository, Request $request){
		$id = $areaRepository->deleteItem($request->input("id"));
		if($id > 0)
		return json_encode(['successMsg'    => 'Record deleted sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
