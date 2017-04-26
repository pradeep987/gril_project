<?php

namespace App\Http\Controllers\Admin\wholesale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\wholesale\BusinessCategroyRepository;
use Validator;
use Log;

class BusinessCategroy extends Controller
{
	
	protected $request;
	
	public function rules()
	{
		return [
			'id'=>'required|integer',
			'businessCategroy'=>'required|max:128|min:2',
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
	
	public function getAllBusinessCategroyList(BusinessCategroyRepository $businessCategroyRepository)
    {
		$businessCategroyList = $businessCategroyRepository->getAllBusinessCategroyList();
		return json_encode($businessCategroyList);
	}
	public function saveItem(BusinessCategroyRepository $businessCategroyRepository, Request $request)
    {
		$validator = Validator::make($request->all(), 
            BusinessCategroy::rules(), BusinessCategroy::messages()
        );
		
		if ($validator->fails()) {
            return json_encode(BusinessCategroy::messages());
		}
		$businessCategroyList = $businessCategroyRepository->saveItem($request->getContent());
		if($businessCategroyList > 0 && is_numeric($businessCategroyList))
			return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($businessCategroyList == 'exsit')
			return json_encode(['errorMsg'    => 'Business Categroy already exsit']);
		elseif($businessCategroyList == 'update')
			return json_encode(['successMsg'    => 'Record updated sucessfully']);	
		else
			return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}
	
	public function deleteItem(BusinessCategroyRepository $businessCategroyRepository, $id){
		$id = $businessCategroyRepository->deleteItem($id);
		if($id > 0)
			return json_encode(['successMsg'    => 'Record delete sucessfully']);
		else
			return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}
	
}
