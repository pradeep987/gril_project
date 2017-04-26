<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\BusinessModelRepository;
use Validator;
use Log;

class BusinessModel extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'businessModel'=>'required|max:128|min:2',
			'active'=>'required|boolean',
			'tblName'=>'max:128',
			'shortName'=>'max:128',
			'iconName'=>'max:128',
			'seoTitle'=>'max:256',
			'seoUrl'=>'max:256',
			'seoKeywords'=>'max:256',
			'seoTags'=>'max:256',
			'seoDesc'=>'max:1024'
			];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getAllBusinessModelList(BusinessModelRepository $businessModelRepository)
	{
		$businessModelList = $businessModelRepository->getAllBusinessModelList();
		return json_encode($businessModelList);
	}
	public function saveItem(BusinessModelRepository $businessModelRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		BusinessModel::rules(), BusinessModel::messages()
		);

		if ($validator->fails()) {
			return json_encode(BusinessModel::messages());
		}
		$businessModelList = $businessModelRepository->saveItem($request->getContent());
		if($businessModelList > 0 && is_numeric($businessModelList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($businessModelList == 'exsit')
		return json_encode(['errorMsg'    => 'Business Model already exsit']);
		elseif($businessModelList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(BusinessModelRepository $businessModelRepository, $id){
		$id = $businessModelRepository->deleteItem($id);
		if($id > 0)
		return json_encode(['successMsg'    => 'Record delete sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
