<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\CountyRepository;
use Validator;
use Log;

class County extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'countryId'=>'required|integer',
			'county'=>'required|max:64|min:2',
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

	public function getAllCountyList(CountyRepository $CountyRepository)
	{
		$CountyList = $CountyRepository->getAllCountyList();
		return json_encode($CountyList);
	}
	public function saveItem(CountyRepository $CountyRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		County::rules(), County::messages()
		);

		if ($validator->fails()) {
			return json_encode(County::messages());
		}
		$CountyList = $CountyRepository->saveItem($request->getContent());
		if($CountyList > 0 && is_numeric($CountyList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($CountyList == 'exsit')
		return json_encode(['errorMsg'    => 'County already exsit']);
		elseif($CountyList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(CountyRepository $CountyRepository, $id){
		$id = $CountyRepository->deleteItem($id);
		if($id > 0)
		return json_encode(['successMsg'    => 'Record deleted sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
