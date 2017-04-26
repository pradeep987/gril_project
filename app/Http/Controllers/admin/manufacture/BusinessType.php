<?php

namespace App\Http\Controllers\Admin\manufacture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\manufacture\BusinessTypeRepository;
use Validator;
use Log;

class BusinessType extends Controller
{
	
	protected $request;
	
	public function rules()
	{
		return [
			'id'=>'required|integer',
			'businessType'=>'required|max:128|min:2',
			'active'=>'required|boolean',
			
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
	
	public function getAllBusinessTypeList(BusinessTypeRepository $businessTypeRepository)
    {
		$businessTypeList = $businessTypeRepository->getAllBusinessTypeList();
		return json_encode($businessTypeList);
	}
	public function saveItem(BusinessTypeRepository $businessTypeRepository, Request $request)
    {
		    $validator = Validator::make($request->all(), 
            BusinessType::rules(), BusinessType::messages()
        );
		
		if ($validator->fails()) {
            return json_encode(BusinessType::messages());
		}
		$businessTypeList = $businessTypeRepository->saveItem($request->getContent());
        //echo $businessTypeList;exit;
		if($businessTypeList > 0 && is_numeric($businessTypeList))
			return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($businessTypeList == 'exsit')
			return json_encode(['errorMsg'    => 'Business Type already exsit']);
		elseif($businessTypeList == 'update')
			return json_encode(['successMsg'    => 'Record updated sucessfully']);	
		else
			return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}
	
	public function deleteItem(BusinessTypeRepository $businessTypeRepository, $id){
		$id = $businessTypeRepository->deleteItem($id);
		if($id > 0)
			return json_encode(['successMsg'    => 'Record delete sucessfully']);
		else
			return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}
	
}
